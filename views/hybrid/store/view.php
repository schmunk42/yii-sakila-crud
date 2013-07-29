<?php
$this->breadcrumbs[Yii::t('crud','Stores')] = array('admin');
$this->breadcrumbs[] = $model->store_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Store')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->store_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('store_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->store_id), array('view', 'store_id'=>$model->store_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('manager_staff_id')); ?>:</b>
    <?php echo CHtml::encode($model->manager_staff_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('address_id')); ?>:</b>
    <?php echo CHtml::encode($model->address_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($model->last_update); ?>
    <br />


<h2><?php echo CHtml::link(Yii::t('app','Customers'), array('/sakila/hybrid/customer/admin'));?></h2>
<ul>
                <?php if (is_array($model->customers)) foreach($model->customers as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/customer/view','customer_id'=>$foreignobj->customer_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/customer/update','customer_id'=>$foreignobj->customer_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/customer/create', 'Customer' => array('store_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Inventories'), array('/sakila/hybrid/inventory/admin'));?></h2>
<ul>
                <?php if (is_array($model->inventories)) foreach($model->inventories as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/inventory/view','inventory_id'=>$foreignobj->inventory_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/inventory/update','inventory_id'=>$foreignobj->inventory_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/inventory/create', 'Inventory' => array('store_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Staffs'), array('/sakila/hybrid/staff/admin'));?></h2>
<ul>
                <?php if (is_array($model->staffs)) foreach($model->staffs as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/staff/view','staff_id'=>$foreignobj->staff_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/staff/update','staff_id'=>$foreignobj->staff_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/staff/create', 'Staff' => array('store_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'store_id',
        array(
            'name'=>'manager_staff_id',
            'value'=>($model->managerStaff !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->managerStaff->itemLabel, array('/sakila/hybrid/staff/view','staff_id'=>$model->managerStaff->staff_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'address_id',
            'value'=>($model->address !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->address->itemLabel, array('/sakila/hybrid/address/view','address_id'=>$model->address->address_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'last_update',
),
        )); ?></p>

