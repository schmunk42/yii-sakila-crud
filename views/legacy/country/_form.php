<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>        .
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'country-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'country'); ?>
<?php echo $form->textField($model,'country',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'country'); ?>
<div class='hint'><?php if('hint.Country.country' != $hint = Yii::t('app', 'country')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_update'); ?>
<?php echo $form->textField($model,'last_update'); ?>
<?php echo $form->error($model,'last_update'); ?>
<div class='hint'><?php if('hint.Country.last_update' != $hint = Yii::t('app', 'last_update')) echo $hint; ?></div>
</div>


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
            'submit' => array('country/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
