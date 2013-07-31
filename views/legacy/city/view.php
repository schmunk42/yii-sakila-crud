<?php
$this->breadcrumbs['Cities'] = array('index');
$this->breadcrumbs[] = $model->city_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->city_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->city_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> City <?php echo $model->city_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
        'city_id',
        'city',
        array(
            'name'=>'country_id',
            'value'=>($model->country !== null)?CHtml::link($model->country->itemLabel, array('/sakila/legacy/country/view','country_id'=>$model->country->country_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/country/update','country_id'=>$model->country->country_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        'last_update',
),
)); ?>


<h2><?php echo CHtml::link(Yii::t('app','Addresses'), array('/sakila/legacy/address/admin'));?></h2>
<ul>
                <?php if (is_array($model->addresses)) foreach($model->addresses as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/address/view','address_id'=>$foreignobj->address_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/address/update','address_id'=>$foreignobj->address_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/address/create', 'Address' => array('city_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>