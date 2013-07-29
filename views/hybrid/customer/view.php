<?php
$this->breadcrumbs[Yii::t('crud','Customers')] = array('admin');
$this->breadcrumbs[] = $model->customer_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Customer')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->customer_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('customer_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->customer_id), array('view', 'customer_id'=>$model->customer_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('store_id')); ?>:</b>
    <?php echo CHtml::encode($model->store_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('first_name')); ?>:</b>
    <?php echo CHtml::encode($model->first_name); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_name')); ?>:</b>
    <?php echo CHtml::encode($model->last_name); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($model->email); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('address_id')); ?>:</b>
    <?php echo CHtml::encode($model->address_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('active')); ?>:</b>
    <?php echo CHtml::encode($model->active); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($model->getAttributeLabel('create_date')); ?>:</b>
    <?php echo CHtml::encode($model->create_date); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($model->last_update); ?>
    <br />

    */ ?>

<h2><?php echo CHtml::link(Yii::t('app','Payments'), array('/sakila/hybrid/payment/admin'));?></h2>
<ul>
                <?php if (is_array($model->payments)) foreach($model->payments as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/payment/view','payment_id'=>$foreignobj->payment_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/payment/update','payment_id'=>$foreignobj->payment_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/payment/create', 'Payment' => array('customer_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Rentals'), array('/sakila/hybrid/rental/admin'));?></h2>
<ul>
                <?php if (is_array($model->rentals)) foreach($model->rentals as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/rental/view','rental_id'=>$foreignobj->rental_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/rental/update','rental_id'=>$foreignobj->rental_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/rental/create', 'Rental' => array('customer_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'customer_id',
        array(
            'name'=>'store_id',
            'value'=>($model->store !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->store->itemLabel, array('/sakila/hybrid/store/view','store_id'=>$model->store->store_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'first_name',
        'last_name',
        'email',
        array(
            'name'=>'address_id',
            'value'=>($model->address !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->address->itemLabel, array('/sakila/hybrid/address/view','address_id'=>$model->address->address_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'active',
        'create_date',
        'last_update',
),
        )); ?></p>

