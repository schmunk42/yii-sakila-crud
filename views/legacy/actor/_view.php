<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('actor_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->actor_id), array('view', 'actor_id'=>$data->actor_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
    <?php echo CHtml::encode($data->first_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
    <?php echo CHtml::encode($data->last_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />


</div>
