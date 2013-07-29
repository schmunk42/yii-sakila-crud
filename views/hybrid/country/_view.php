<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('country_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->country_id), array('sakila/hybrid/country/view', 'country_id'=>$data->country_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
    <?php echo CHtml::encode($data->country); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />

    <?php if (Yii::app()->user->checkAccess('Country.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Country'))), array('sakila/hybrid/country/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
