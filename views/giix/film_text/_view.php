<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('film_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->film_id), array('view', 'id' => $data->film_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('description')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />

</div>