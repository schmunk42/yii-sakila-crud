<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>        .
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'staff-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'first_name'); ?>
<?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'first_name'); ?>
<div class='hint'><?php if('hint.Staff.first_name' != $hint = Yii::t('app', 'first_name')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_name'); ?>
<?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'last_name'); ?>
<div class='hint'><?php if('hint.Staff.last_name' != $hint = Yii::t('app', 'last_name')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'picture'); ?>
<?php echo $form->textField($model,'picture'); ?>
<?php echo $form->error($model,'picture'); ?>
<div class='hint'><?php if('hint.Staff.picture' != $hint = Yii::t('app', 'picture')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'email'); ?>
<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'email'); ?>
<div class='hint'><?php if('hint.Staff.email' != $hint = Yii::t('app', 'email')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'active'); ?>
<?php echo $form->checkBox($model,'active'); ?>
<?php echo $form->error($model,'active'); ?>
<div class='hint'><?php if('hint.Staff.active' != $hint = Yii::t('app', 'active')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'username'); ?>
<?php echo $form->textField($model,'username',array('size'=>16,'maxlength'=>16)); ?>
<?php echo $form->error($model,'username'); ?>
<div class='hint'><?php if('hint.Staff.username' != $hint = Yii::t('app', 'username')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'password'); ?>
<?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>40)); ?>
<?php echo $form->error($model,'password'); ?>
<div class='hint'><?php if('hint.Staff.password' != $hint = Yii::t('app', 'password')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_update'); ?>
<?php echo $form->textField($model,'last_update'); ?>
<?php echo $form->error($model,'last_update'); ?>
<div class='hint'><?php if('hint.Staff.last_update' != $hint = Yii::t('app', 'last_update')) echo $hint; ?></div>
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


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
            'submit' => array('staff/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
