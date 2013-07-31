<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('language_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->language_id), array('view', 'id' => $data->language_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />

</div>