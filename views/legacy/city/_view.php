<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->city_id), array('view', 'city_id'=>$data->city_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
    <?php echo CHtml::encode($data->city); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('country_id')); ?>:</b>
    <?php echo CHtml::encode($data->country_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />


</div>
