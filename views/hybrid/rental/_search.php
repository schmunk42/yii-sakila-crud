<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'rental_id'); ?>
                            <?php echo $form->textField($model,'rental_id'); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'rental_date'); ?>
                            <?php echo $form->textField($model,'rental_date'); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'inventory_id'); ?>
                            <?php echo $form->dropDownList($model,'inventory_id',CHtml::listData(Inventory::model()->findAll(),
                'inventory_id', 'film_id'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'customer_id'); ?>
                            <?php echo $form->dropDownList($model,'customer_id',CHtml::listData(Customer::model()->findAll(),
                'customer_id', 'store_id'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'return_date'); ?>
                            <?php echo $form->textField($model,'return_date'); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'staff_id'); ?>
                            <?php echo $form->dropDownList($model,'staff_id',CHtml::listData(Staff::model()->findAll(),
                'staff_id', 'first_name'),array('prompt'=>'all')); ?>
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
