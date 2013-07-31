<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>        .
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'address-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'address'); ?>
<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'address'); ?>
<div class='hint'><?php if('hint.Address.address' != $hint = Yii::t('app', 'address')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'address2'); ?>
<?php echo $form->textField($model,'address2',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'address2'); ?>
<div class='hint'><?php if('hint.Address.address2' != $hint = Yii::t('app', 'address2')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'district'); ?>
<?php echo $form->textField($model,'district',array('size'=>20,'maxlength'=>20)); ?>
<?php echo $form->error($model,'district'); ?>
<div class='hint'><?php if('hint.Address.district' != $hint = Yii::t('app', 'district')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'postal_code'); ?>
<?php echo $form->textField($model,'postal_code',array('size'=>10,'maxlength'=>10)); ?>
<?php echo $form->error($model,'postal_code'); ?>
<div class='hint'><?php if('hint.Address.postal_code' != $hint = Yii::t('app', 'postal_code')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'phone'); ?>
<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
<?php echo $form->error($model,'phone'); ?>
<div class='hint'><?php if('hint.Address.phone' != $hint = Yii::t('app', 'phone')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_update'); ?>
<?php echo $form->textField($model,'last_update'); ?>
<?php echo $form->error($model,'last_update'); ?>
<div class='hint'><?php if('hint.Address.last_update' != $hint = Yii::t('app', 'last_update')) echo $hint; ?></div>
</div>

<div class="row">
<label for="city"><?php echo Yii::t('app', 'City'); ?></label>
<?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'city',
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
            'submit' => array('address/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
