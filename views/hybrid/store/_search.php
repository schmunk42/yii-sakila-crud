<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'store_id'); ?>
                            <?php echo $form->textField($model,'store_id'); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'manager_staff_id'); ?>
                            <?php echo $form->dropDownList($model,'manager_staff_id',CHtml::listData(Staff::model()->findAll(),
                'staff_id', 'first_name'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'address_id'); ?>
                            <?php echo $form->dropDownList($model,'address_id',CHtml::listData(Address::model()->findAll(),
                'address_id', 'address'),array('prompt'=>'all')); ?>
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
