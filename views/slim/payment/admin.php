<?php
$this->breadcrumbs[] = Yii::t('crud','Payments');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('payment-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Payments'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'payment-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
        array('header'=>'','value'=>'$data["itemLabel"]'),
        'payment_id',
        array(
                    'name'=>'customer_id',
                    'value'=>'CHtml::value($data,\'customer.itemLabel\')',
                            'filter'=>CHtml::listData(Customer::model()->findAll(), 'customer_id', 'itemLabel'),
                            ),
        array(
                    'name'=>'staff_id',
                    'value'=>'CHtml::value($data,\'staff.itemLabel\')',
                            'filter'=>CHtml::listData(Staff::model()->findAll(), 'staff_id', 'itemLabel'),
                            ),
        array(
                    'name'=>'rental_id',
                    'value'=>'CHtml::value($data,\'rental.itemLabel\')',
                            'filter'=>CHtml::listData(Rental::model()->findAll(), 'rental_id', 'itemLabel'),
                            ),
        'amount',
        'payment_date',
        'last_update',
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('payment_id' => \$data->payment_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('payment_id' => \$data->payment_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('payment_id' => \$data->payment_id))",
        ),
    ),
)); ?>