<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->customer_id), array('sakila/hybrid/customer/view', 'customer_id'=>$data->customer_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('store_id')); ?>:</b>
    <?php echo CHtml::encode($data->store_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
    <?php echo CHtml::encode($data->first_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
    <?php echo CHtml::encode($data->last_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address_id')); ?>:</b>
    <?php echo CHtml::encode($data->address_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
    <?php echo CHtml::encode($data->active); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
    <?php echo CHtml::encode($data->create_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />

    */ ?>
    <?php if (Yii::app()->user->checkAccess('Customer.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Customer'))), array('sakila/hybrid/customer/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
