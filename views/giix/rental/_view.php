<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('rental_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->rental_id), array('view', 'id' => $data->rental_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('rental_date')); ?>:
	<?php echo GxHtml::encode($data->rental_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inventory')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->inventory)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('customer')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->customer)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('return_date')); ?>:
	<?php echo GxHtml::encode($data->return_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('staff')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->staff)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />

</div>