<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('store_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->store_id), array('sakila/hybrid/store/view', 'store_id'=>$data->store_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('manager_staff_id')); ?>:</b>
    <?php echo CHtml::encode($data->manager_staff_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address_id')); ?>:</b>
    <?php echo CHtml::encode($data->address_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />

    <?php if (Yii::app()->user->checkAccess('Store.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Store'))), array('sakila/hybrid/store/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
