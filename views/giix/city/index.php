<?php

$this->breadcrumbs = array(
	City::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . City::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . City::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(City::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 