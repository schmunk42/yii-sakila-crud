<?php
$this->breadcrumbs[Yii::t('crud','Film Texts')] = array('admin');
$this->breadcrumbs[] = $model->film_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Film Text')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->film_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('film_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->film_id), array('view', 'film_id'=>$model->film_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($model->title); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($model->description); ?>
    <br />



<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'film_id',
        'title',
        'description',
),
        )); ?></p>

