<div class="wide form">

    
    <?php
    $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
    )); ?>

    
    
        <div class="row">
            <?php echo $form->label($model,'store_id'); ?>

                            <?php ; ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'manager_staff_id'); ?>

                            <?php ; ?>
 // TODO: itemLabel
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'address_id'); ?>

                            <?php ; ?>
 // TODO: itemLabel
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'last_update'); ?>

                            <?php echo $form->textField($model,'last_update'); ?>
                    </div>

    
    <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('crud', 'Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
