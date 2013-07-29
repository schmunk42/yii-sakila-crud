<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('film_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->film_id), array('sakila/hybrid/film_text/view', 'film_id'=>$data->film_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($data->title); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
    <br />

    <?php if (Yii::app()->user->checkAccess('Film_text.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Film Text'))), array('sakila/hybrid/film_text/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
