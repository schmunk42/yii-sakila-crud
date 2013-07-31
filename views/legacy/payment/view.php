<?php
$this->breadcrumbs['Payments'] = array('index');
$this->breadcrumbs[] = $model->payment_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->payment_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->payment_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> Payment <?php echo $model->payment_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
        'payment_id',
        array(
            'name'=>'customer_id',
            'value'=>($model->customer !== null)?CHtml::link($model->customer->itemLabel, array('/sakila/legacy/customer/view','customer_id'=>$model->customer->customer_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/customer/update','customer_id'=>$model->customer->customer_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'staff_id',
            'value'=>($model->staff !== null)?CHtml::link($model->staff->itemLabel, array('/sakila/legacy/staff/view','staff_id'=>$model->staff->staff_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/staff/update','staff_id'=>$model->staff->staff_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'rental_id',
            'value'=>($model->rental !== null)?CHtml::link($model->rental->itemLabel, array('/sakila/legacy/rental/view','rental_id'=>$model->rental->rental_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/rental/update','rental_id'=>$model->rental->rental_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        'amount',
        'payment_date',
        'last_update',
),
)); ?>


