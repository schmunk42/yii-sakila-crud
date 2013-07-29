<?php
$this->breadcrumbs[Yii::t('crud','Staffs')] = array('admin');
$this->breadcrumbs[] = $model->staff_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Staff')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->staff_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('staff_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->staff_id), array('view', 'staff_id'=>$model->staff_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('first_name')); ?>:</b>
    <?php echo CHtml::encode($model->first_name); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_name')); ?>:</b>
    <?php echo CHtml::encode($model->last_name); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('address_id')); ?>:</b>
    <?php echo CHtml::encode($model->address_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('picture')); ?>:</b>
    <?php echo CHtml::encode($model->picture); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($model->email); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('store_id')); ?>:</b>
    <?php echo CHtml::encode($model->store_id); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($model->getAttributeLabel('active')); ?>:</b>
    <?php echo CHtml::encode($model->active); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('username')); ?>:</b>
    <?php echo CHtml::encode($model->username); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('password')); ?>:</b>
    <?php echo CHtml::encode($model->password); ?>
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
                array('/sakila/hybrid/payment/create', 'Payment' => array('staff_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Rentals'), array('/sakila/hybrid/rental/admin'));?></h2>
<ul>
                <?php if (is_array($model->rentals)) foreach($model->rentals as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/rental/view','rental_id'=>$foreignobj->rental_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/rental/update','rental_id'=>$foreignobj->rental_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/rental/create', 'Rental' => array('staff_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Stores'), array('/sakila/hybrid/store/admin'));?></h2>
<ul>
                <?php if (is_array($model->stores)) foreach($model->stores as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/store/view','store_id'=>$foreignobj->store_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/store/update','store_id'=>$foreignobj->store_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/store/create', 'Store' => array('manager_staff_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'staff_id',
        'first_name',
        'last_name',
        array(
            'name'=>'address_id',
            'value'=>($model->address !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->address->itemLabel, array('/sakila/hybrid/address/view','address_id'=>$model->address->address_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'picture',
        'email',
        array(
            'name'=>'store_id',
            'value'=>($model->store !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->store->itemLabel, array('/sakila/hybrid/store/view','store_id'=>$model->store->store_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'active',
        'username',
        'password',
        'last_update',
),
        )); ?></p>

