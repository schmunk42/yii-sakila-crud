<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('actor_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->actor_id), array('sakila/hybrid/actor/view', 'actor_id'=>$data->actor_id)); ?>
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

    <?php if (Yii::app()->user->checkAccess('Actor.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Actor'))), array('sakila/hybrid/actor/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
