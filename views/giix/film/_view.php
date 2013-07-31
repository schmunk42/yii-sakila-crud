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
	<?php echo GxHtml::encode($data->getAttributeLabel('release_year')); ?>:
	<?php echo GxHtml::encode($data->release_year); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('language')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->language)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('originalLanguage')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->originalLanguage)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rental_duration')); ?>:
	<?php echo GxHtml::encode($data->rental_duration); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('rental_rate')); ?>:
	<?php echo GxHtml::encode($data->rental_rate); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('length')); ?>:
	<?php echo GxHtml::encode($data->length); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('replacement_cost')); ?>:
	<?php echo GxHtml::encode($data->replacement_cost); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rating')); ?>:
	<?php echo GxHtml::encode($data->rating); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('special_features')); ?>:
	<?php echo GxHtml::encode($data->special_features); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />
	*/ ?>

</div>