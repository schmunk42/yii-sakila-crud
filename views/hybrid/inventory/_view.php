<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('inventory_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->inventory_id), array('sakila/hybrid/inventory/view', 'inventory_id'=>$data->inventory_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('film_id')); ?>:</b>
    <?php echo CHtml::encode($data->film_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('store_id')); ?>:</b>
    <?php echo CHtml::encode($data->store_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />

    <?php if (Yii::app()->user->checkAccess('Inventory.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Inventory'))), array('sakila/hybrid/inventory/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
