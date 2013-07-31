<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->staff_id), array('view', 'staff_id'=>$data->staff_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
    <?php echo CHtml::encode($data->first_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
    <?php echo CHtml::encode($data->last_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address_id')); ?>:</b>
    <?php echo CHtml::encode($data->address_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('picture')); ?>:</b>
    <?php echo CHtml::encode($data->picture); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('store_id')); ?>:</b>
    <?php echo CHtml::encode($data->store_id); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
    <?php echo CHtml::encode($data->active); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
    <?php echo CHtml::encode($data->username); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
    <?php echo CHtml::encode($data->password); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />

    */ ?>

</div>
