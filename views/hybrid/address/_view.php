<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('address_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->address_id), array('sakila/hybrid/address/view', 'address_id'=>$data->address_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
    <?php echo CHtml::encode($data->address); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address2')); ?>:</b>
    <?php echo CHtml::encode($data->address2); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('district')); ?>:</b>
    <?php echo CHtml::encode($data->district); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
    <?php echo CHtml::encode($data->city_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('postal_code')); ?>:</b>
    <?php echo CHtml::encode($data->postal_code); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
    <?php echo CHtml::encode($data->phone); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />

    */ ?>
    <?php if (Yii::app()->user->checkAccess('Address.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Address'))), array('sakila/hybrid/address/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
