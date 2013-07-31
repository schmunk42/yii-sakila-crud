<?php

$this->breadcrumbs = array(
	Inventory::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Inventory::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Inventory::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Inventory::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 