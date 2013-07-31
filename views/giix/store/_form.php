<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'store-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'manager_staff_id'); ?>
		<?php echo $form->dropDownList($model, 'manager_staff_id', GxHtml::listDataEx(Staff::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'manager_staff_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'address_id'); ?>
		<?php echo $form->dropDownList($model, 'address_id', GxHtml::listDataEx(Address::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'address_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model, 'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('customers')); ?></label>
		<?php echo $form->checkBoxList($model, 'customers', GxHtml::encodeEx(GxHtml::listDataEx(Customer::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('inventories')); ?></label>
		<?php echo $form->checkBoxList($model, 'inventories', GxHtml::encodeEx(GxHtml::listDataEx(Inventory::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('staffs')); ?></label>
		<?php echo $form->checkBoxList($model, 'staffs', GxHtml::encodeEx(GxHtml::listDataEx(Staff::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->