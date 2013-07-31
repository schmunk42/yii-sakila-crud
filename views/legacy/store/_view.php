<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('store_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->store_id), array('view', 'store_id'=>$data->store_id)); ?>
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


</div>
