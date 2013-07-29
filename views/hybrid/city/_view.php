<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->city_id), array('sakila/hybrid/city/view', 'city_id'=>$data->city_id)); ?>
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

    <?php if (Yii::app()->user->checkAccess('City.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'City'))), array('sakila/hybrid/city/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
