<?php

$this->breadcrumbs = array(
	Customer::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Customer::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Customer::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Customer::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 