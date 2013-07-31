<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('inventory_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->inventory_id), array('view', 'id' => $data->inventory_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('film')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->film)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('store')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->store)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />

</div>