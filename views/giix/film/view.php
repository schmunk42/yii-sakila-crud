<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>'Update' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->film_id)),
	array('label'=>'Delete' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->film_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo 'View' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'film_id',
'title',
'description',
'release_year',
array(
			'name' => 'language',
			'type' => 'raw',
			'value' => $model->language !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->language)), array('language/view', 'id' => GxActiveRecord::extractPkValue($model->language, true))) : null,
			),
array(
			'name' => 'originalLanguage',
			'type' => 'raw',
			'value' => $model->originalLanguage !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->originalLanguage)), array('language/view', 'id' => GxActiveRecord::extractPkValue($model->originalLanguage, true))) : null,
			),
'rental_duration',
'rental_rate',
'length',
'replacement_cost',
'rating',
'special_features',
'last_update',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('actors')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->actors as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('actor/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('categories')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->categories as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('category/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
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
?>