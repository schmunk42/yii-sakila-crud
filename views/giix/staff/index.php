<?php

$this->breadcrumbs = array(
	Staff::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Staff::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Staff::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Staff::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 