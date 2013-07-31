<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('film_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->film_id), array('view', 'film_id'=>$data->film_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($data->title); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
    <br />


</div>
