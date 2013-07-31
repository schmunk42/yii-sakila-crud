<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('rental_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->rental_id), array('view', 'rental_id'=>$data->rental_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('rental_date')); ?>:</b>
    <?php echo CHtml::encode($data->rental_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('inventory_id')); ?>:</b>
    <?php echo CHtml::encode($data->inventory_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
    <?php echo CHtml::encode($data->customer_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('return_date')); ?>:</b>
    <?php echo CHtml::encode($data->return_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
    <?php echo CHtml::encode($data->staff_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />


</div>
