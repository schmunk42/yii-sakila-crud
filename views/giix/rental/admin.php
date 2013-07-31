<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	'Manage',
);

$this->menu = array(
		array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rental-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo 'Manage' . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'rental-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'rental_id',
		'rental_date',
		array(
				'name'=>'inventory_id',
				'value'=>'GxHtml::valueEx($data->inventory)',
				'filter'=>GxHtml::listDataEx(Inventory::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'customer_id',
				'value'=>'GxHtml::valueEx($data->customer)',
				'filter'=>GxHtml::listDataEx(Customer::model()->findAllAttributes(null, true)),
				),
		'return_date',
		array(
				'name'=>'staff_id',
				'value'=>'GxHtml::valueEx($data->staff)',
				'filter'=>GxHtml::listDataEx(Staff::model()->findAllAttributes(null, true)),
				),
		/*
		'last_update',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>