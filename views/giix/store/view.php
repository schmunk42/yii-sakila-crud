<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>'Update' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->store_id)),
	array('label'=>'Delete' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->store_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo 'View' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'store_id',
array(
			'name' => 'managerStaff',
			'type' => 'raw',
			'value' => $model->managerStaff !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->managerStaff)), array('staff/view', 'id' => GxActiveRecord::extractPkValue($model->managerStaff, true))) : null,
			),
array(
			'name' => 'address',
			'type' => 'raw',
			'value' => $model->address !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->address)), array('address/view', 'id' => GxActiveRecord::extractPkValue($model->address, true))) : null,
			),
'last_update',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('customers')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->customers as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('customer/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('inventories')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->inventories as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('inventory/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('staffs')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->staffs as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('staff/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>