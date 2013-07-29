<?php
$this->breadcrumbs[Yii::t('crud','Cities')] = array('admin');
$this->breadcrumbs[] = $model->city_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','City')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->city_id ?></small></h1>



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
        )); ?>
    </div>

    <div class="span4">
        
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>
            </div>
</div>