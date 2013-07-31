<?php
$this->breadcrumbs[Yii::t('crud','Countries')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'View');
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Country')?>
    <small><?php echo Yii::t('crud','View')?> #<?php echo $model->country_id ?></small>
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
                'country_id',
        'country',
        'last_update',
),
            ));
        ?>
    </div>

    <div class="span4">
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>    </div>
</div>