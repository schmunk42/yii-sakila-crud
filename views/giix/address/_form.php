<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'address-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model, 'address', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'address2'); ?>
		<?php echo $form->textField($model, 'address2', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'address2'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'district'); ?>
		<?php echo $form->textField($model, 'district', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'district'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'city_id'); ?>
		<?php echo $form->dropDownList($model, 'city_id', GxHtml::listDataEx(City::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'city_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'postal_code'); ?>
		<?php echo $form->textField($model, 'postal_code', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'postal_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model, 'phone', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'phone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model, 'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('customers')); ?></label>
		<?php echo $form->checkBoxList($model, 'customers', GxHtml::encodeEx(GxHtml::listDataEx(Customer::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('staffs')); ?></label>
		<?php echo $form->checkBoxList($model, 'staffs', GxHtml::encodeEx(GxHtml::listDataEx(Staff::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('stores')); ?></label>
		<?php echo $form->checkBoxList($model, 'stores', GxHtml::encodeEx(GxHtml::listDataEx(Store::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->