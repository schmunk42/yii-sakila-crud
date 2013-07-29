<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
           'action'=>Yii::app()->createUrl($this->route),
           'method'=>'get',
   )); ?>

            
        <div class="row">
            <?php echo $form->label($model,'city_id'); ?>            
                            <?php echo $form->textField($model,'city_id'); ?>            
        </div>

            
        <div class="row">
            <?php echo $form->label($model,'city'); ?>            
                            <?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>            
        </div>

            
        <div class="row">
            <?php echo $form->label($model,'country_id'); ?>            
                            <?php echo $form->dropDownList($model,'country_id',CHtml::listData(Country::model()->findAll(),
                'country_id', 'country'),array('prompt'=>'all')); ?>            
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
