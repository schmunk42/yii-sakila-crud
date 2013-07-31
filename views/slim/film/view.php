<?php
$this->breadcrumbs[Yii::t('crud','Films')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'View');
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Film')?>
    <small><?php echo Yii::t('crud','View')?> #<?php echo $model->film_id ?></small>
    </h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>


<div class="row">
    <div class="span7">
        <h2>
            <?php echo Yii::t('crud','Data')?>            <small>
                <?php echo $model->itemLabel?>            </small>
        </h2>



        <?php
        $this->widget(
            'TbDetailView',
            array(
                'data'=>$model,
                'attributes'=>array(
                'film_id',
        'title',
        'description',
        'release_year',
        array(
            'name'=>'language_id',
            'value'=>($model->language !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->language->itemLabel,
                            array('/sakila/slim/language/view','language_id'=>$model->language->language_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('/sakila/slim/language/update','language_id'=>$model->language->language_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'original_language_id',
            'value'=>($model->originalLanguage !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->originalLanguage->itemLabel,
                            array('/sakila/slim/language/view','language_id'=>$model->originalLanguage->language_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('/sakila/slim/language/update','language_id'=>$model->originalLanguage->language_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        'rental_duration',
        'rental_rate',
        'length',
        'replacement_cost',
        'rating',
        'special_features',
        'last_update',
),
            ));
        ?>
    </div>

    <div class="span5">
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>    </div>
</div>