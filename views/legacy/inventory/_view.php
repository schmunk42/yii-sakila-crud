<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('inventory_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->inventory_id), array('view', 'inventory_id'=>$data->inventory_id)); ?>
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


</div>
