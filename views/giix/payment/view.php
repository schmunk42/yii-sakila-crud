<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>'Update' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->payment_id)),
	array('label'=>'Delete' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->payment_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo 'View' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'payment_id',
array(
			'name' => 'customer',
			'type' => 'raw',
			'value' => $model->customer !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->customer)), array('customer/view', 'id' => GxActiveRecord::extractPkValue($model->customer, true))) : null,
			),
array(
			'name' => 'staff',
			'type' => 'raw',
			'value' => $model->staff !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->staff)), array('staff/view', 'id' => GxActiveRecord::extractPkValue($model->staff, true))) : null,
			),
array(
			'name' => 'rental',
			'type' => 'raw',
			'value' => $model->rental !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->rental)), array('rental/view', 'id' => GxActiveRecord::extractPkValue($model->rental, true))) : null,
			),
'amount',
'payment_date',
'last_update',
	),
)); ?>

