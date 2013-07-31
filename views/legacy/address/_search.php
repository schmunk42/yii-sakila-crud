<div class="wide form">

    
    <?php
    $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
    )); ?>

    
    
        <div class="row">
            <?php echo $form->label($model,'address_id'); ?>

                            <?php ; ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'address'); ?>

                            <?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'address2'); ?>

                            <?php echo $form->textField($model,'address2',array('size'=>50,'maxlength'=>50)); ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'district'); ?>

                            <?php echo $form->textField($model,'district',array('size'=>20,'maxlength'=>20)); ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'city_id'); ?>

                            <?php ; ?>
 // TODO: itemLabel
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'postal_code'); ?>

                            <?php echo $form->textField($model,'postal_code',array('size'=>10,'maxlength'=>10)); ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'phone'); ?>

                            <?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
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
