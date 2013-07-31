<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'customer-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'store_id'); ?>
		<?php echo $form->dropDownList($model, 'store_id', GxHtml::listDataEx(Store::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'store_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model, 'first_name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'first_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model, 'last_name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'last_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'address_id'); ?>
		<?php echo $form->dropDownList($model, 'address_id', GxHtml::listDataEx(Address::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'address_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model, 'active'); ?>
		<?php echo $form->error($model,'active'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model, 'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model, 'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('payments')); ?></label>
		<?php echo $form->checkBoxList($model, 'payments', GxHtml::encodeEx(GxHtml::listDataEx(Payment::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('rentals')); ?></label>
		<?php echo $form->checkBoxList($model, 'rentals', GxHtml::encodeEx(GxHtml::listDataEx(Rental::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->