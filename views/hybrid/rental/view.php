<?php
$this->breadcrumbs[Yii::t('crud','Rentals')] = array('admin');
$this->breadcrumbs[] = $model->rental_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Rental')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->rental_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('rental_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->rental_id), array('view', 'rental_id'=>$model->rental_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('rental_date')); ?>:</b>
    <?php echo CHtml::encode($model->rental_date); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('inventory_id')); ?>:</b>
    <?php echo CHtml::encode($model->inventory_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('customer_id')); ?>:</b>
    <?php echo CHtml::encode($model->customer_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('return_date')); ?>:</b>
    <?php echo CHtml::encode($model->return_date); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('staff_id')); ?>:</b>
    <?php echo CHtml::encode($model->staff_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($model->last_update); ?>
    <br />


<h2><?php echo CHtml::link(Yii::t('app','Payments'), array('/sakila/hybrid/payment/admin'));?></h2>
<ul>
                <?php if (is_array($model->payments)) foreach($model->payments as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/payment/view','payment_id'=>$foreignobj->payment_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/payment/update','payment_id'=>$foreignobj->payment_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/payment/create', 'Payment' => array('rental_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'rental_id',
        'rental_date',
        array(
            'name'=>'inventory_id',
            'value'=>($model->inventory !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->inventory->itemLabel, array('/sakila/hybrid/inventory/view','inventory_id'=>$model->inventory->inventory_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'customer_id',
            'value'=>($model->customer !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->customer->itemLabel, array('/sakila/hybrid/customer/view','customer_id'=>$model->customer->customer_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'return_date',
        array(
            'name'=>'staff_id',
            'value'=>($model->staff !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->staff->itemLabel, array('/sakila/hybrid/staff/view','staff_id'=>$model->staff->staff_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'last_update',
),
        )); ?></p>

