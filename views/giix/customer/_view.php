<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('customer_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->customer_id), array('view', 'id' => $data->customer_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('store')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->store)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('first_name')); ?>:
	<?php echo GxHtml::encode($data->first_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_name')); ?>:
	<?php echo GxHtml::encode($data->last_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->address)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('active')); ?>:
	<?php echo GxHtml::encode($data->active); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('create_date')); ?>:
	<?php echo GxHtml::encode($data->create_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />
	*/ ?>

</div>