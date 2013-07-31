<?php

$this->breadcrumbs = array(
	Rental::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Rental::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Rental::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Rental::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 