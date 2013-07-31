<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'rental-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'rental_date'); ?>
		<?php echo $form->textField($model, 'rental_date'); ?>
		<?php echo $form->error($model,'rental_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'inventory_id'); ?>
		<?php echo $form->dropDownList($model, 'inventory_id', GxHtml::listDataEx(Inventory::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'inventory_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->dropDownList($model, 'customer_id', GxHtml::listDataEx(Customer::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'customer_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'return_date'); ?>
		<?php echo $form->textField($model, 'return_date'); ?>
		<?php echo $form->error($model,'return_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'staff_id'); ?>
		<?php echo $form->dropDownList($model, 'staff_id', GxHtml::listDataEx(Staff::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'staff_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model, 'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('payments')); ?></label>
		<?php echo $form->checkBoxList($model, 'payments', GxHtml::encodeEx(GxHtml::listDataEx(Payment::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->