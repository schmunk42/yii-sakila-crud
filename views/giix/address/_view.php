<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('address_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->address_id), array('view', 'id' => $data->address_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('address')); ?>:
	<?php echo GxHtml::encode($data->address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address2')); ?>:
	<?php echo GxHtml::encode($data->address2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('district')); ?>:
	<?php echo GxHtml::encode($data->district); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->city)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('postal_code')); ?>:
	<?php echo GxHtml::encode($data->postal_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('phone')); ?>:
	<?php echo GxHtml::encode($data->phone); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />
	*/ ?>

</div>