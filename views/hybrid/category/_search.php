<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'category_id'); ?>
                            <?php echo $form->textField($model,'category_id'); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'name'); ?>
                            <?php echo $form->textField($model,'name',array('size'=>25,'maxlength'=>25)); ?>
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
