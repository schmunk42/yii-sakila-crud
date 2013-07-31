<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'country-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model, 'country', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'country'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model, 'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('cities')); ?></label>
		<?php echo $form->checkBoxList($model, 'cities', GxHtml::encodeEx(GxHtml::listDataEx(City::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->