<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('city_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->city_id), array('view', 'id' => $data->city_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode($data->city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->country)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />

</div>