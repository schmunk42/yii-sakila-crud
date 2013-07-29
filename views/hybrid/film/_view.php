<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('film_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->film_id), array('sakila/hybrid/film/view', 'film_id'=>$data->film_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($data->title); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('release_year')); ?>:</b>
    <?php echo CHtml::encode($data->release_year); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('language_id')); ?>:</b>
    <?php echo CHtml::encode($data->language_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('original_language_id')); ?>:</b>
    <?php echo CHtml::encode($data->original_language_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('rental_duration')); ?>:</b>
    <?php echo CHtml::encode($data->rental_duration); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($data->getAttributeLabel('rental_rate')); ?>:</b>
    <?php echo CHtml::encode($data->rental_rate); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('length')); ?>:</b>
    <?php echo CHtml::encode($data->length); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('replacement_cost')); ?>:</b>
    <?php echo CHtml::encode($data->replacement_cost); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
    <?php echo CHtml::encode($data->rating); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('special_features')); ?>:</b>
    <?php echo CHtml::encode($data->special_features); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />

    */ ?>
    <?php if (Yii::app()->user->checkAccess('Film.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Film'))), array('sakila/hybrid/film/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
