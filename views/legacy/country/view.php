<?php
$this->breadcrumbs['Countries'] = array('index');
$this->breadcrumbs[] = $model->country_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->country_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->country_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> Country <?php echo $model->country_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
        'country_id',
        'country',
        'last_update',
),
)); ?>


<h2><?php echo CHtml::link(Yii::t('app','Cities'), array('/sakila/legacy/city/admin'));?></h2>
<ul>
                <?php if (is_array($model->cities)) foreach($model->cities as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/city/view','city_id'=>$foreignobj->city_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/city/update','city_id'=>$foreignobj->city_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/city/create', 'City' => array('country_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>