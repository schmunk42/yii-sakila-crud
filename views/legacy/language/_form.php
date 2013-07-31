<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>        .
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'language-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'name'); ?>
<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?>
<?php echo $form->error($model,'name'); ?>
<div class='hint'><?php if('hint.Language.name' != $hint = Yii::t('app', 'name')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_update'); ?>
<?php echo $form->textField($model,'last_update'); ?>
<?php echo $form->error($model,'last_update'); ?>
<div class='hint'><?php if('hint.Language.last_update' != $hint = Yii::t('app', 'last_update')) echo $hint; ?></div>
</div>


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
            'submit' => array('language/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
