<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'film_id'); ?>
		<?php echo $form->textField($model, 'film_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'title'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'release_year'); ?>
		<?php echo $form->textField($model, 'release_year', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'language_id'); ?>
		<?php echo $form->dropDownList($model, 'language_id', GxHtml::listDataEx(Language::model()->findAllAttributes(null, true)), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'original_language_id'); ?>
		<?php echo $form->dropDownList($model, 'original_language_id', GxHtml::listDataEx(Language::model()->findAllAttributes(null, true)), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'rental_duration'); ?>
		<?php echo $form->textField($model, 'rental_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'rental_rate'); ?>
		<?php echo $form->textField($model, 'rental_rate', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'length'); ?>
		<?php echo $form->textField($model, 'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'replacement_cost'); ?>
		<?php echo $form->textField($model, 'replacement_cost', array('maxlength' => 5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'rating'); ?>
		<?php echo $form->textField($model, 'rating', array('maxlength' => 5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'special_features'); ?>
		<?php echo $form->textField($model, 'special_features', array('maxlength' => 0)); ?>
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
