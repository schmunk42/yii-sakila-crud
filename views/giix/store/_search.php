<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'store_id'); ?>
		<?php echo $form->textField($model, 'store_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'manager_staff_id'); ?>
		<?php echo $form->dropDownList($model, 'manager_staff_id', GxHtml::listDataEx(Staff::model()->findAllAttributes(null, true)), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'address_id'); ?>
		<?php echo $form->dropDownList($model, 'address_id', GxHtml::listDataEx(Address::model()->findAllAttributes(null, true)), array('prompt' => 'All')); ?>
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
