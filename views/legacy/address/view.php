<?php
$this->breadcrumbs['Addresses'] = array('index');
$this->breadcrumbs[] = $model->address_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->address_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->address_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> Address <?php echo $model->address_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
        'address_id',
        'address',
        'address2',
        'district',
        array(
            'name'=>'city_id',
            'value'=>($model->city !== null)?CHtml::link($model->city->itemLabel, array('/sakila/legacy/city/view','city_id'=>$model->city->city_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/city/update','city_id'=>$model->city->city_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        'postal_code',
        'phone',
        'last_update',
),
)); ?>


<h2><?php echo CHtml::link(Yii::t('app','Customers'), array('/sakila/legacy/customer/admin'));?></h2>
<ul>
                <?php if (is_array($model->customers)) foreach($model->customers as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/customer/view','customer_id'=>$foreignobj->customer_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/customer/update','customer_id'=>$foreignobj->customer_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/customer/create', 'Customer' => array('address_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Staffs'), array('/sakila/legacy/staff/admin'));?></h2>
<ul>
                <?php if (is_array($model->staffs)) foreach($model->staffs as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/staff/view','staff_id'=>$foreignobj->staff_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/staff/update','staff_id'=>$foreignobj->staff_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/staff/create', 'Staff' => array('address_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Stores'), array('/sakila/legacy/store/admin'));?></h2>
<ul>
                <?php if (is_array($model->stores)) foreach($model->stores as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/store/view','store_id'=>$foreignobj->store_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/store/update','store_id'=>$foreignobj->store_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/store/create', 'Store' => array('address_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>