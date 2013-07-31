<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'inventory-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'film_id'); ?>
		<?php echo $form->dropDownList($model, 'film_id', GxHtml::listDataEx(Film::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'film_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'store_id'); ?>
		<?php echo $form->dropDownList($model, 'store_id', GxHtml::listDataEx(Store::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'store_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model, 'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('rentals')); ?></label>
		<?php echo $form->checkBoxList($model, 'rentals', GxHtml::encodeEx(GxHtml::listDataEx(Rental::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->