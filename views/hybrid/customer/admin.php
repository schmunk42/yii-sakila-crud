<?php
$this->breadcrumbs[] = Yii::t('crud','Customers');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('customer-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Customers'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'customer-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
        'customer_id',
        array(
                    'name'=>'store_id',
                    'value'=>'CHtml::value($data,\'store.itemLabel\')',
                            'filter'=>CHtml::listData(Store::model()->findAll(), 'store_id', 'itemLabel'),
                            ),
        'first_name',
        'last_name',
        'email',
        array(
                    'name'=>'address_id',
                    'value'=>'CHtml::value($data,\'address.itemLabel\')',
                            'filter'=>CHtml::listData(Address::model()->findAll(), 'address_id', 'itemLabel'),
                            ),
        'active',
        /*
        'create_date',
        'last_update',
        */
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('customer_id' => \$data->customer_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('customer_id' => \$data->customer_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('customer_id' => \$data->customer_id))",
        ),
    ),
)); ?>
