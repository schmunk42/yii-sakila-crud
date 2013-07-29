<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
           'action'=>Yii::app()->createUrl($this->route),
           'method'=>'get',
   )); ?>

            
        <div class="row">
            <?php echo $form->label($model,'customer_id'); ?>            
                            <?php echo $form->textField($model,'customer_id'); ?>            
        </div>

            
        <div class="row">
            <?php echo $form->label($model,'store_id'); ?>            
                            <?php echo $form->dropDownList($model,'store_id',CHtml::listData(Store::model()->findAll(),
                'store_id', 'manager_staff_id'),array('prompt'=>'all')); ?>            
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
            <?php echo $form->label($model,'email'); ?>            
                            <?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>            
        </div>

            
        <div class="row">
            <?php echo $form->label($model,'address_id'); ?>            
                            <?php echo $form->dropDownList($model,'address_id',CHtml::listData(Address::model()->findAll(),
                'address_id', 'address'),array('prompt'=>'all')); ?>            
        </div>

            
        <div class="row">
            <?php echo $form->label($model,'active'); ?>            
                            <?php echo $form->checkBox($model,'active'); ?>            
        </div>

            
        <div class="row">
            <?php echo $form->label($model,'create_date'); ?>            
                            <?php echo $form->textField($model,'create_date'); ?>            
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
