<?php

$this->breadcrumbs = array(
	Payment::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Payment::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Payment::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Payment::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 