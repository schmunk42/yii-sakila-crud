<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('country_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->country_id), array('view', 'id' => $data->country_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('country')); ?>:
	<?php echo GxHtml::encode($data->country); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />

</div>