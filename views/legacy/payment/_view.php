<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('payment_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->payment_id), array('view', 'payment_id'=>$data->payment_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
    <?php echo CHtml::encode($data->customer_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
    <?php echo CHtml::encode($data->staff_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('rental_id')); ?>:</b>
    <?php echo CHtml::encode($data->rental_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
    <?php echo CHtml::encode($data->amount); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('payment_date')); ?>:</b>
    <?php echo CHtml::encode($data->payment_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />


</div>
