<?php
$this->breadcrumbs[Yii::t('crud','Countries')] = array('admin');
$this->breadcrumbs[] = $model->country_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Country')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->country_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('country_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->country_id), array('view', 'country_id'=>$model->country_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('country')); ?>:</b>
    <?php echo CHtml::encode($model->country); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($model->last_update); ?>
    <br />


<h2><?php echo CHtml::link(Yii::t('app','Cities'), array('/sakila/hybrid/city/admin'));?></h2>
<ul>
                <?php if (is_array($model->cities)) foreach($model->cities as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/city/view','city_id'=>$foreignobj->city_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/city/update','city_id'=>$foreignobj->city_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/city/create', 'City' => array('country_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'country_id',
        'country',
        'last_update',
),
        )); ?></p>

