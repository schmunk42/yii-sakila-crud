<?php
$this->breadcrumbs['Inventories'] = array('index');
$this->breadcrumbs[] = $model->inventory_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->inventory_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->inventory_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> Inventory <?php echo $model->inventory_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
        'inventory_id',
        array(
            'name'=>'film_id',
            'value'=>($model->film !== null)?CHtml::link($model->film->itemLabel, array('/sakila/legacy/film/view','film_id'=>$model->film->film_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/film/update','film_id'=>$model->film->film_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'store_id',
            'value'=>($model->store !== null)?CHtml::link($model->store->itemLabel, array('/sakila/legacy/store/view','store_id'=>$model->store->store_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/store/update','store_id'=>$model->store->store_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        'last_update',
),
)); ?>


<h2><?php echo CHtml::link(Yii::t('app','Rentals'), array('/sakila/legacy/rental/admin'));?></h2>
<ul>
                <?php if (is_array($model->rentals)) foreach($model->rentals as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/rental/view','rental_id'=>$foreignobj->rental_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/rental/update','rental_id'=>$foreignobj->rental_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/rental/create', 'Rental' => array('inventory_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>