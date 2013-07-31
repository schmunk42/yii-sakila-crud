<?php

$this->breadcrumbs = array(
	Store::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Store::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Store::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Store::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 