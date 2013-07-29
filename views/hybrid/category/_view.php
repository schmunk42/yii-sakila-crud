<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->category_id), array('sakila/hybrid/category/view', 'category_id'=>$data->category_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />

    <?php if (Yii::app()->user->checkAccess('Category.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Category'))), array('sakila/hybrid/category/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
