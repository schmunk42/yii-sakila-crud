<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('address_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->address_id), array('view', 'address_id'=>$data->address_id)); ?>
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

</div>
