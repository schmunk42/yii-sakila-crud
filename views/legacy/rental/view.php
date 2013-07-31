<?php
$this->breadcrumbs['Rentals'] = array('index');
$this->breadcrumbs[] = $model->rental_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->rental_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rental_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> Rental <?php echo $model->rental_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
        'rental_id',
        'rental_date',
        array(
            'name'=>'inventory_id',
            'value'=>($model->inventory !== null)?CHtml::link($model->inventory->itemLabel, array('/sakila/legacy/inventory/view','inventory_id'=>$model->inventory->inventory_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/inventory/update','inventory_id'=>$model->inventory->inventory_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'customer_id',
            'value'=>($model->customer !== null)?CHtml::link($model->customer->itemLabel, array('/sakila/legacy/customer/view','customer_id'=>$model->customer->customer_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/customer/update','customer_id'=>$model->customer->customer_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        'return_date',
        array(
            'name'=>'staff_id',
            'value'=>($model->staff !== null)?CHtml::link($model->staff->itemLabel, array('/sakila/legacy/staff/view','staff_id'=>$model->staff->staff_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/staff/update','staff_id'=>$model->staff->staff_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
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
                array('/sakila/legacy/payment/create', 'Payment' => array('rental_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>