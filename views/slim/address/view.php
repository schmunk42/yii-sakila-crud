<?php
$this->breadcrumbs[Yii::t('crud','Addresses')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'View');
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Address')?>
    <small><?php echo Yii::t('crud','View')?> #<?php echo $model->address_id ?></small>
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
                'address_id',
        'address',
        'address2',
        'district',
        array(
            'name'=>'city_id',
            'value'=>($model->city !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->city->itemLabel,
                            array('/sakila/slim/city/view','city_id'=>$model->city->city_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('/sakila/slim/city/update','city_id'=>$model->city->city_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        'postal_code',
        'phone',
        'last_update',
),
            ));
        ?>
    </div>

    <div class="span4">
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>    </div>
</div>