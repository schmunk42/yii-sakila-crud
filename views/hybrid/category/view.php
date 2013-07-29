<?php
$this->breadcrumbs[Yii::t('crud','Categories')] = array('admin');
$this->breadcrumbs[] = $model->category_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Category')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->category_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('category_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->category_id), array('view', 'category_id'=>$model->category_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($model->name); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($model->last_update); ?>
    <br />


<h2><?php echo CHtml::link(Yii::t('app','Films'), array('/sakila/hybrid/film/admin'));?></h2>
<ul>
                <?php if (is_array($model->films)) foreach($model->films as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/film/view','film_id'=>$foreignobj->film_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/film/update','film_id'=>$foreignobj->film_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/film/create', 'Film' => array('film_category(category_id, film_id)'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'category_id',
        'name',
        'last_update',
),
        )); ?></p>

