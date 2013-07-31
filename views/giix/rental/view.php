<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>'Update' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->rental_id)),
	array('label'=>'Delete' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->rental_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo 'View' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'rental_id',
'rental_date',
array(
			'name' => 'inventory',
			'type' => 'raw',
			'value' => $model->inventory !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->inventory)), array('inventory/view', 'id' => GxActiveRecord::extractPkValue($model->inventory, true))) : null,
			),
array(
			'name' => 'customer',
			'type' => 'raw',
			'value' => $model->customer !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->customer)), array('customer/view', 'id' => GxActiveRecord::extractPkValue($model->customer, true))) : null,
			),
'return_date',
array(
			'name' => 'staff',
			'type' => 'raw',
			'value' => $model->staff !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->staff)), array('staff/view', 'id' => GxActiveRecord::extractPkValue($model->staff, true))) : null,
			),
'last_update',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('payments')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->payments as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('payment/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>