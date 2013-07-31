<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('category_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->category_id), array('view', 'id' => $data->category_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />

</div>