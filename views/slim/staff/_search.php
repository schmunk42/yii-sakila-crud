<div class="wide form">

    
    <?php
    $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
    )); ?>

    
    
        <div class="row">
            <?php echo $form->label($model,'staff_id'); ?>

                            <?php ; ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'first_name'); ?>

                            <?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)); ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'last_name'); ?>

                            <?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)); ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'address_id'); ?>

                            <?php ; ?>
 // TODO: itemLabel
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'picture'); ?>

                            <?php echo $form->textField($model,'picture'); ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'email'); ?>

                            <?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'store_id'); ?>

                            <?php ; ?>
 // TODO: itemLabel
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'active'); ?>

                            <?php echo $form->checkBox($model,'active'); ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'username'); ?>

                            <?php echo $form->textField($model,'username',array('size'=>16,'maxlength'=>16)); ?>
                    </div>

    
        <div class="row">
            <?php echo $form->label($model,'password'); ?>

                            <?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>40)); ?>
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
