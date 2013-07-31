<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>        .
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'city-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'city'); ?>
<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'city'); ?>
<div class='hint'><?php if('hint.City.city' != $hint = Yii::t('app', 'city')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_update'); ?>
<?php echo $form->textField($model,'last_update'); ?>
<?php echo $form->error($model,'last_update'); ?>
<div class='hint'><?php if('hint.City.last_update' != $hint = Yii::t('app', 'last_update')) echo $hint; ?></div>
</div>

<div class="row">
<label for="country"><?php echo Yii::t('app', 'Country'); ?></label>
<?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'country',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ); ?><br />
</div>


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
            'submit' => array('city/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
