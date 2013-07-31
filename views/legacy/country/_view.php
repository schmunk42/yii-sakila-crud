<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('country_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->country_id), array('view', 'country_id'=>$data->country_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
    <?php echo CHtml::encode($data->country); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />


</div>
