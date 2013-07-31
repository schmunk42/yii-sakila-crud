<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'inventory_id'); ?>
		<?php echo $form->textField($model, 'inventory_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'film_id'); ?>
		<?php echo $form->dropDownList($model, 'film_id', GxHtml::listDataEx(Film::model()->findAllAttributes(null, true)), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'store_id'); ?>
		<?php echo $form->dropDownList($model, 'store_id', GxHtml::listDataEx(Store::model()->findAllAttributes(null, true)), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'last_update'); ?>
		<?php echo $form->textField($model, 'last_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
