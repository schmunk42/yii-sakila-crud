<?php
$this->breadcrumbs['Staffs'] = array('index');
$this->breadcrumbs[] = $model->staff_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->staff_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->staff_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> Staff <?php echo $model->staff_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
        'staff_id',
        'first_name',
        'last_name',
        array(
            'name'=>'address_id',
            'value'=>($model->address !== null)?CHtml::link($model->address->itemLabel, array('/sakila/legacy/address/view','address_id'=>$model->address->address_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/address/update','address_id'=>$model->address->address_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        'picture',
        'email',
        array(
            'name'=>'store_id',
            'value'=>($model->store !== null)?CHtml::link($model->store->itemLabel, array('/sakila/legacy/store/view','store_id'=>$model->store->store_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/store/update','store_id'=>$model->store->store_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        'active',
        'username',
        'password',
        'last_update',
),
)); ?>


<h2><?php echo CHtml::link(Yii::t('app','Payments'), array('/sakila/legacy/payment/admin'));?></h2>
<ul>
                <?php if (is_array($model->payments)) foreach($model->payments as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/payment/view','payment_id'=>$foreignobj->payment_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/payment/update','payment_id'=>$foreignobj->payment_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/payment/create', 'Payment' => array('staff_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Rentals'), array('/sakila/legacy/rental/admin'));?></h2>
<ul>
                <?php if (is_array($model->rentals)) foreach($model->rentals as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/rental/view','rental_id'=>$foreignobj->rental_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/rental/update','rental_id'=>$foreignobj->rental_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/rental/create', 'Rental' => array('staff_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Stores'), array('/sakila/legacy/store/admin'));?></h2>
<ul>
                <?php if (is_array($model->stores)) foreach($model->stores as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/store/view','store_id'=>$foreignobj->store_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/store/update','store_id'=>$foreignobj->store_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/store/create', 'Store' => array('manager_staff_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>