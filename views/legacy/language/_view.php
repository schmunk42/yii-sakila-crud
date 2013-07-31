<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('language_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->language_id), array('view', 'language_id'=>$data->language_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />


</div>
