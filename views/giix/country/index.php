<?php

$this->breadcrumbs = array(
	Country::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Country::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Country::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Country::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 