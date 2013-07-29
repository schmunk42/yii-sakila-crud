<?php
$this->breadcrumbs[Yii::t('crud','Payments')] = array('admin');
$this->breadcrumbs[] = $model->payment_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Payment')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->payment_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('payment_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->payment_id), array('view', 'payment_id'=>$model->payment_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('customer_id')); ?>:</b>
    <?php echo CHtml::encode($model->customer_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('staff_id')); ?>:</b>
    <?php echo CHtml::encode($model->staff_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('rental_id')); ?>:</b>
    <?php echo CHtml::encode($model->rental_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('amount')); ?>:</b>
    <?php echo CHtml::encode($model->amount); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('payment_date')); ?>:</b>
    <?php echo CHtml::encode($model->payment_date); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($model->last_update); ?>
    <br />



<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'payment_id',
        array(
            'name'=>'customer_id',
            'value'=>($model->customer !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->customer->itemLabel, array('/sakila/hybrid/customer/view','customer_id'=>$model->customer->customer_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'staff_id',
            'value'=>($model->staff !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->staff->itemLabel, array('/sakila/hybrid/staff/view','staff_id'=>$model->staff->staff_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'rental_id',
            'value'=>($model->rental !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->rental->itemLabel, array('/sakila/hybrid/rental/view','rental_id'=>$model->rental->rental_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'amount',
        'payment_date',
        'last_update',
),
        )); ?></p>

