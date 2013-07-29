<?php
$this->breadcrumbs[Yii::t('crud','Categories')] = array('admin');
$this->breadcrumbs[] = $model->category_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Category')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->category_id ?></small></h1>



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
            'category_id',
        'name',
        'last_update',
),
        )); ?>
    </div>

    <div class="span4">
        
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>
            </div>
</div>