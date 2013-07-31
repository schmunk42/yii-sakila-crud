<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>        .
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'customer-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'first_name'); ?>
<?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'first_name'); ?>
<div class='hint'><?php if('hint.Customer.first_name' != $hint = Yii::t('app', 'first_name')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_name'); ?>
<?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'last_name'); ?>
<div class='hint'><?php if('hint.Customer.last_name' != $hint = Yii::t('app', 'last_name')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'email'); ?>
<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'email'); ?>
<div class='hint'><?php if('hint.Customer.email' != $hint = Yii::t('app', 'email')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'active'); ?>
<?php echo $form->checkBox($model,'active'); ?>
<?php echo $form->error($model,'active'); ?>
<div class='hint'><?php if('hint.Customer.active' != $hint = Yii::t('app', 'active')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'create_date'); ?>
<?php echo $form->textField($model,'create_date'); ?>
<?php echo $form->error($model,'create_date'); ?>
<div class='hint'><?php if('hint.Customer.create_date' != $hint = Yii::t('app', 'create_date')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_update'); ?>
<?php echo $form->textField($model,'last_update'); ?>
<?php echo $form->error($model,'last_update'); ?>
<div class='hint'><?php if('hint.Customer.last_update' != $hint = Yii::t('app', 'last_update')) echo $hint; ?></div>
</div>

<div class="row">
<label for="address"><?php echo Yii::t('app', 'Address'); ?></label>
<?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'address',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ); ?><br />
</div>

<div class="row">
<label for="store"><?php echo Yii::t('app', 'Store'); ?></label>
<?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'store',
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
            'submit' => array('customer/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
