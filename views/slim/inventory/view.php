<?php
$this->breadcrumbs[Yii::t('crud','Inventories')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'View');
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Inventory')?>
    <small><?php echo Yii::t('crud','View')?> #<?php echo $model->inventory_id ?></small>
    </h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>


<div class="row">
    <div class="span8">
        <h2>
            <?php echo Yii::t('crud','Data')?>        </h2>

        <h3>
            <?php echo $model->itemLabel?>        </h3>


        <?php
        $this->widget(
            'TbDetailView',
            array(
                'data'=>$model,
                'attributes'=>array(
                'inventory_id',
        array(
            'name'=>'film_id',
            'value'=>($model->film !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->film->itemLabel,
                            array('/sakila/slim/film/view','film_id'=>$model->film->film_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('/sakila/slim/film/update','film_id'=>$model->film->film_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'store_id',
            'value'=>($model->store !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->store->itemLabel,
                            array('/sakila/slim/store/view','store_id'=>$model->store->store_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('/sakila/slim/store/update','store_id'=>$model->store->store_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        'last_update',
),
            ));
        ?>
    </div>

    <div class="span4">
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>    </div>
</div>