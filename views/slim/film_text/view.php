<?php
$this->breadcrumbs[Yii::t('crud','Film Texts')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'View');
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Film Text')?>
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
),
            ));
        ?>
    </div>

    <div class="span5">
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>    </div>
</div>