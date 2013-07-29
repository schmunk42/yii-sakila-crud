<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('payment_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->payment_id), array('sakila/hybrid/payment/view', 'payment_id'=>$data->payment_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
    <?php echo CHtml::encode($data->customer_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
    <?php echo CHtml::encode($data->staff_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('rental_id')); ?>:</b>
    <?php echo CHtml::encode($data->rental_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
    <?php echo CHtml::encode($data->amount); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('payment_date')); ?>:</b>
    <?php echo CHtml::encode($data->payment_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($data->last_update); ?>
    <br />

    <?php if (Yii::app()->user->checkAccess('Payment.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Payment'))), array('sakila/hybrid/payment/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
