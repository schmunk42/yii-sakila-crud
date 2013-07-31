<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>        .
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'inventory-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'last_update'); ?>
<?php echo $form->textField($model,'last_update'); ?>
<?php echo $form->error($model,'last_update'); ?>
<div class='hint'><?php if('hint.Inventory.last_update' != $hint = Yii::t('app', 'last_update')) echo $hint; ?></div>
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
<label for="film"><?php echo Yii::t('app', 'Film'); ?></label>
<?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'film',
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
            'submit' => array('inventory/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
