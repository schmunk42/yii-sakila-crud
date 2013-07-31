<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('payment_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->payment_id), array('view', 'id' => $data->payment_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('customer')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->customer)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('staff')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->staff)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rental')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->rental)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('amount')); ?>:
	<?php echo GxHtml::encode($data->amount); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('payment_date')); ?>:
	<?php echo GxHtml::encode($data->payment_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />

</div>