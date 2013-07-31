<?php

$this->breadcrumbs = array(
	Film_text::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Film_text::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Film_text::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Film_text::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 