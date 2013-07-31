<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('store_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->store_id), array('view', 'id' => $data->store_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('managerStaff')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->managerStaff)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->address)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />

</div>