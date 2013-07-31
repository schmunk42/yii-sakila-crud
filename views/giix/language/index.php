<?php

$this->breadcrumbs = array(
	Language::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Language::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Language::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Language::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 