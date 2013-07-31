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
	$.fn.yiiGridView.update('film-grid', {
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
	'id' => 'film-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'film_id',
		'title',
		'description',
		'release_year',
		array(
				'name'=>'language_id',
				'value'=>'GxHtml::valueEx($data->language)',
				'filter'=>GxHtml::listDataEx(Language::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'original_language_id',
				'value'=>'GxHtml::valueEx($data->originalLanguage)',
				'filter'=>GxHtml::listDataEx(Language::model()->findAllAttributes(null, true)),
				),
		/*
		'rental_duration',
		'rental_rate',
		'length',
		'replacement_cost',
		'rating',
		'special_features',
		'last_update',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>