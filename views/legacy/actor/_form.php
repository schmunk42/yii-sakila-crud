<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>        .
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'actor-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'first_name'); ?>
<?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'first_name'); ?>
<div class='hint'><?php if('hint.Actor.first_name' != $hint = Yii::t('app', 'first_name')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_name'); ?>
<?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'last_name'); ?>
<div class='hint'><?php if('hint.Actor.last_name' != $hint = Yii::t('app', 'last_name')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_update'); ?>
<?php echo $form->textField($model,'last_update'); ?>
<?php echo $form->error($model,'last_update'); ?>
<div class='hint'><?php if('hint.Actor.last_update' != $hint = Yii::t('app', 'last_update')) echo $hint; ?></div>
</div>

<div class="row">
<label for="films"><?php echo Yii::t('app', 'Films'); ?></label>
<?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'films',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'multiselect',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ); ?><br />
</div>


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
            'submit' => array('actor/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
