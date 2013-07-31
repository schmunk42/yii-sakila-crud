<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'film-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'release_year'); ?>
		<?php echo $form->textField($model, 'release_year', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'release_year'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'language_id'); ?>
		<?php echo $form->dropDownList($model, 'language_id', GxHtml::listDataEx(Language::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'language_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'original_language_id'); ?>
		<?php echo $form->dropDownList($model, 'original_language_id', GxHtml::listDataEx(Language::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'original_language_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rental_duration'); ?>
		<?php echo $form->textField($model, 'rental_duration'); ?>
		<?php echo $form->error($model,'rental_duration'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rental_rate'); ?>
		<?php echo $form->textField($model, 'rental_rate', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'rental_rate'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'length'); ?>
		<?php echo $form->textField($model, 'length'); ?>
		<?php echo $form->error($model,'length'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'replacement_cost'); ?>
		<?php echo $form->textField($model, 'replacement_cost', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'replacement_cost'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
		<?php echo $form->textField($model, 'rating', array('maxlength' => 5)); ?>
		<?php echo $form->error($model,'rating'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'special_features'); ?>
		<?php echo $form->textField($model, 'special_features', array('maxlength' => 0)); ?>
		<?php echo $form->error($model,'special_features'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model, 'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('actors')); ?></label>
		<?php echo $form->checkBoxList($model, 'actors', GxHtml::encodeEx(GxHtml::listDataEx(Actor::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('categories')); ?></label>
		<?php echo $form->checkBoxList($model, 'categories', GxHtml::encodeEx(GxHtml::listDataEx(Category::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('inventories')); ?></label>
		<?php echo $form->checkBoxList($model, 'inventories', GxHtml::encodeEx(GxHtml::listDataEx(Inventory::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->