<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('actor_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->actor_id), array('view', 'id' => $data->actor_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('first_name')); ?>:
	<?php echo GxHtml::encode($data->first_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_name')); ?>:
	<?php echo GxHtml::encode($data->last_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />

</div>