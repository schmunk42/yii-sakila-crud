<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'payment-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->dropDownList($model, 'customer_id', GxHtml::listDataEx(Customer::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'customer_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'staff_id'); ?>
		<?php echo $form->dropDownList($model, 'staff_id', GxHtml::listDataEx(Staff::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'staff_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rental_id'); ?>
		<?php echo $form->dropDownList($model, 'rental_id', GxHtml::listDataEx(Rental::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'rental_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model, 'amount', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'amount'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payment_date'); ?>
		<?php echo $form->textField($model, 'payment_date'); ?>
		<?php echo $form->error($model,'payment_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model, 'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->