<?php
$this->breadcrumbs[Yii::t('crud','Films')] = array('admin');
$this->breadcrumbs[] = $model->film_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Film')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->film_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>


<div class="row">
    <div class="span8">
        <h2>
            <?php echo Yii::t('crud','Data')?>        </h2>

        <h3>
            <?php echo $model->itemLabel?>        </h3>


        <?php
    $this->widget('TbDetailView', array(
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
                            array('language/view','language_id'=>$model->language->language_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('language/update','language_id'=>$model->language->language_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'original_language_id',
            'value'=>($model->originalLanguage !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->originalLanguage->itemLabel,
                            array('language/view','language_id'=>$model->originalLanguage->language_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('language/update','language_id'=>$model->originalLanguage->language_id),
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
        )); ?>
    </div>

    <div class="span4">
        
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>
            </div>
</div>