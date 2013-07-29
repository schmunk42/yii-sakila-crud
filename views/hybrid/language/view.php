<?php
$this->breadcrumbs[Yii::t('crud','Languages')] = array('admin');
$this->breadcrumbs[] = $model->language_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Language')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->language_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('language_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->language_id), array('view', 'language_id'=>$model->language_id)); ?>
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
                array('/sakila/hybrid/film/create', 'Film' => array('language_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Films1'), array('/sakila/hybrid/film/admin'));?></h2>
<ul>
                <?php if (is_array($model->films1)) foreach($model->films1 as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/film/view','film_id'=>$foreignobj->film_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/film/update','film_id'=>$foreignobj->film_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/film/create', 'Film' => array('original_language_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'language_id',
        'name',
        'last_update',
),
        )); ?></p>

