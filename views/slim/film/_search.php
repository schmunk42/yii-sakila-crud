<div class="wide form">

    
    <?php
    $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
    )); ?>

    
    
        <div class="row">
            <?php echo $form->label($model,'film_id'); ?>
            <?php ; ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'title'); ?>
            <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'description'); ?>
            <?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'release_year'); ?>
            <?php echo $form->textField($model,'release_year',array('size'=>4,'maxlength'=>4)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'language_id'); ?>
            <?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'language',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'original_language_id'); ?>
            <?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'originalLanguage',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'rental_duration'); ?>
            <?php echo $form->textField($model,'rental_duration'); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'rental_rate'); ?>
            <?php echo $form->textField($model,'rental_rate',array('size'=>4,'maxlength'=>4)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'length'); ?>
            <?php echo $form->textField($model,'length'); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'replacement_cost'); ?>
            <?php echo $form->textField($model,'replacement_cost',array('size'=>5,'maxlength'=>5)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'rating'); ?>
            <?php echo CHtml::activeDropDownList($model, 'rating', array(
            'G' => 'G' ,
            'PG' => 'PG' ,
            'PG-13' => 'PG-13' ,
            'R' => 'R' ,
            'NC-17' => 'NC-17' ,
)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'special_features'); ?>
            <?php echo $form->textField($model,'special_features',array('size'=>0,'maxlength'=>0)); ?>

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
