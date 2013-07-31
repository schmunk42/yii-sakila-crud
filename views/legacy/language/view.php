<?php
$this->breadcrumbs['Languages'] = array('index');
$this->breadcrumbs[] = $model->language_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->language_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->language_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> Language <?php echo $model->language_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
        'language_id',
        'name',
        'last_update',
),
)); ?>


<h2><?php echo CHtml::link(Yii::t('app','Films'), array('/sakila/legacy/film/admin'));?></h2>
<ul>
                <?php if (is_array($model->films)) foreach($model->films as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/film/view','film_id'=>$foreignobj->film_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/film/update','film_id'=>$foreignobj->film_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/film/create', 'Film' => array('language_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Films1'), array('/sakila/legacy/film/admin'));?></h2>
<ul>
                <?php if (is_array($model->films1)) foreach($model->films1 as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/film/view','film_id'=>$foreignobj->film_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/film/update','film_id'=>$foreignobj->film_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/film/create', 'Film' => array('original_language_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>