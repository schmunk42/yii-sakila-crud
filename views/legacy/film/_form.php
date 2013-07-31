<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>        .
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'film-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'title'); ?>
<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
<?php echo $form->error($model,'title'); ?>
<div class='hint'><?php if('hint.Film.title' != $hint = Yii::t('app', 'title')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'description'); ?>
<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
<?php echo $form->error($model,'description'); ?>
<div class='hint'><?php if('hint.Film.description' != $hint = Yii::t('app', 'description')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'release_year'); ?>
<?php echo $form->textField($model,'release_year',array('size'=>4,'maxlength'=>4)); ?>
<?php echo $form->error($model,'release_year'); ?>
<div class='hint'><?php if('hint.Film.release_year' != $hint = Yii::t('app', 'release_year')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'rental_duration'); ?>
<?php echo $form->textField($model,'rental_duration'); ?>
<?php echo $form->error($model,'rental_duration'); ?>
<div class='hint'><?php if('hint.Film.rental_duration' != $hint = Yii::t('app', 'rental_duration')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'rental_rate'); ?>
<?php echo $form->textField($model,'rental_rate',array('size'=>4,'maxlength'=>4)); ?>
<?php echo $form->error($model,'rental_rate'); ?>
<div class='hint'><?php if('hint.Film.rental_rate' != $hint = Yii::t('app', 'rental_rate')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'length'); ?>
<?php echo $form->textField($model,'length'); ?>
<?php echo $form->error($model,'length'); ?>
<div class='hint'><?php if('hint.Film.length' != $hint = Yii::t('app', 'length')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'replacement_cost'); ?>
<?php echo $form->textField($model,'replacement_cost',array('size'=>5,'maxlength'=>5)); ?>
<?php echo $form->error($model,'replacement_cost'); ?>
<div class='hint'><?php if('hint.Film.replacement_cost' != $hint = Yii::t('app', 'replacement_cost')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'rating'); ?>
<?php echo CHtml::activeDropDownList($model, 'rating', array(
            'G' => 'G' ,
            'PG' => 'PG' ,
            'PG-13' => 'PG-13' ,
            'R' => 'R' ,
            'NC-17' => 'NC-17' ,
)); ?>
<?php echo $form->error($model,'rating'); ?>
<div class='hint'><?php if('hint.Film.rating' != $hint = Yii::t('app', 'rating')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'special_features'); ?>
<?php echo $form->textField($model,'special_features',array('size'=>0,'maxlength'=>0)); ?>
<?php echo $form->error($model,'special_features'); ?>
<div class='hint'><?php if('hint.Film.special_features' != $hint = Yii::t('app', 'special_features')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'last_update'); ?>
<?php echo $form->textField($model,'last_update'); ?>
<?php echo $form->error($model,'last_update'); ?>
<div class='hint'><?php if('hint.Film.last_update' != $hint = Yii::t('app', 'last_update')) echo $hint; ?></div>
</div>

<div class="row">
<label for="language"><?php echo Yii::t('app', 'Language'); ?></label>
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
                        ); ?><br />
</div>

<div class="row">
<label for="originalLanguage"><?php echo Yii::t('app', 'OriginalLanguage'); ?></label>
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
                        ); ?><br />
</div>

<div class="row">
<label for="actors"><?php echo Yii::t('app', 'Actors'); ?></label>
<?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'actors',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'multiselect',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ); ?><br />
</div>

<div class="row">
<label for="categories"><?php echo Yii::t('app', 'Categories'); ?></label>
<?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'categories',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'multiselect',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ); ?><br />
</div>


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
            'submit' => array('film/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
