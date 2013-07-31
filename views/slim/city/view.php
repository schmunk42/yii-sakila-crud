<?php
$this->breadcrumbs[Yii::t('crud','Cities')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'View');
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','City')?>
    <small><?php echo Yii::t('crud','View')?> #<?php echo $model->city_id ?></small>
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
                'city_id',
        'city',
        array(
            'name'=>'country_id',
            'value'=>($model->country !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->country->itemLabel,
                            array('/sakila/slim/country/view','country_id'=>$model->country->country_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('/sakila/slim/country/update','country_id'=>$model->country->country_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        'last_update',
),
            ));
        ?>
    </div>

    <div class="span5">
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>    </div>
</div>