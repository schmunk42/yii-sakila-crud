<?php
$this->breadcrumbs['Stores'] = array('index');
$this->breadcrumbs[] = $model->store_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->store_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->store_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> Store <?php echo $model->store_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
        'store_id',
        array(
            'name'=>'manager_staff_id',
            'value'=>($model->managerStaff !== null)?CHtml::link($model->managerStaff->itemLabel, array('/sakila/legacy/staff/view','staff_id'=>$model->managerStaff->staff_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/staff/update','staff_id'=>$model->managerStaff->staff_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'address_id',
            'value'=>($model->address !== null)?CHtml::link($model->address->itemLabel, array('/sakila/legacy/address/view','address_id'=>$model->address->address_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/address/update','address_id'=>$model->address->address_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
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
                array('/sakila/legacy/customer/create', 'Customer' => array('store_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Inventories'), array('/sakila/legacy/inventory/admin'));?></h2>
<ul>
                <?php if (is_array($model->inventories)) foreach($model->inventories as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/inventory/view','inventory_id'=>$foreignobj->inventory_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/inventory/update','inventory_id'=>$foreignobj->inventory_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/inventory/create', 'Inventory' => array('store_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Staffs'), array('/sakila/legacy/staff/admin'));?></h2>
<ul>
                <?php if (is_array($model->staffs)) foreach($model->staffs as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/staff/view','staff_id'=>$foreignobj->staff_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/staff/update','staff_id'=>$foreignobj->staff_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/staff/create', 'Staff' => array('store_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>