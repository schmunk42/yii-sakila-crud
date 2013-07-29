<?php
$this->breadcrumbs[Yii::t('crud','Addresses')] = array('admin');
$this->breadcrumbs[] = $model->address_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Address')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->address_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('address_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->address_id), array('view', 'address_id'=>$model->address_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('address')); ?>:</b>
    <?php echo CHtml::encode($model->address); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('address2')); ?>:</b>
    <?php echo CHtml::encode($model->address2); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('district')); ?>:</b>
    <?php echo CHtml::encode($model->district); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('city_id')); ?>:</b>
    <?php echo CHtml::encode($model->city_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('postal_code')); ?>:</b>
    <?php echo CHtml::encode($model->postal_code); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('phone')); ?>:</b>
    <?php echo CHtml::encode($model->phone); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($model->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($model->last_update); ?>
    <br />

    */ ?>

<h2><?php echo CHtml::link(Yii::t('app','Customers'), array('/sakila/hybrid/customer/admin'));?></h2>
<ul>
                <?php if (is_array($model->customers)) foreach($model->customers as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/customer/view','customer_id'=>$foreignobj->customer_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/customer/update','customer_id'=>$foreignobj->customer_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/customer/create', 'Customer' => array('address_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Staffs'), array('/sakila/hybrid/staff/admin'));?></h2>
<ul>
                <?php if (is_array($model->staffs)) foreach($model->staffs as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/staff/view','staff_id'=>$foreignobj->staff_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/staff/update','staff_id'=>$foreignobj->staff_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/staff/create', 'Staff' => array('address_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Stores'), array('/sakila/hybrid/store/admin'));?></h2>
<ul>
                <?php if (is_array($model->stores)) foreach($model->stores as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/store/view','store_id'=>$foreignobj->store_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/store/update','store_id'=>$foreignobj->store_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/store/create', 'Store' => array('address_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'address_id',
        'address',
        'address2',
        'district',
        array(
            'name'=>'city_id',
            'value'=>($model->city !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->city->itemLabel, array('/sakila/hybrid/city/view','city_id'=>$model->city->city_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'postal_code',
        'phone',
        'last_update',
),
        )); ?></p>

