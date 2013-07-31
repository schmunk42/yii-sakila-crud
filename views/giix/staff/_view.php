<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('staff_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->staff_id), array('view', 'id' => $data->staff_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('first_name')); ?>:
	<?php echo GxHtml::encode($data->first_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_name')); ?>:
	<?php echo GxHtml::encode($data->last_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->address)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('picture')); ?>:
	<?php echo GxHtml::encode($data->picture); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('store')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->store)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('active')); ?>:
	<?php echo GxHtml::encode($data->active); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('username')); ?>:
	<?php echo GxHtml::encode($data->username); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />
	*/ ?>

</div>