<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'language-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model, 'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('films')); ?></label>
		<?php echo $form->checkBoxList($model, 'films', GxHtml::encodeEx(GxHtml::listDataEx(Film::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('films1')); ?></label>
		<?php echo $form->checkBoxList($model, 'films1', GxHtml::encodeEx(GxHtml::listDataEx(Film::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->