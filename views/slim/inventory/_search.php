<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
           'action'=>Yii::app()->createUrl($this->route),
           'method'=>'get',
   )); ?>

            
        <div class="row">
            <?php echo $form->label($model,'inventory_id'); ?>            
                            <?php echo $form->textField($model,'inventory_id'); ?>            
        </div>

            
        <div class="row">
            <?php echo $form->label($model,'film_id'); ?>            
                            <?php echo $form->dropDownList($model,'film_id',CHtml::listData(Film::model()->findAll(),
                'film_id', 'title'),array('prompt'=>'all')); ?>            
        </div>

            
        <div class="row">
            <?php echo $form->label($model,'store_id'); ?>            
                            <?php echo $form->dropDownList($model,'store_id',CHtml::listData(Store::model()->findAll(),
                'store_id', 'manager_staff_id'),array('prompt'=>'all')); ?>            
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
