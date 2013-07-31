<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>'Update' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->staff_id)),
	array('label'=>'Delete' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->staff_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo 'View' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'staff_id',
'first_name',
'last_name',
array(
			'name' => 'address',
			'type' => 'raw',
			'value' => $model->address !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->address)), array('address/view', 'id' => GxActiveRecord::extractPkValue($model->address, true))) : null,
			),
'picture',
'email',
array(
			'name' => 'store',
			'type' => 'raw',
			'value' => $model->store !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->store)), array('store/view', 'id' => GxActiveRecord::extractPkValue($model->store, true))) : null,
			),
'active:boolean',
'username',
'password',
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
?><h2><?php echo GxHtml::encode($model->getRelationLabel('rentals')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->rentals as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('rental/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('stores')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->stores as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('store/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>