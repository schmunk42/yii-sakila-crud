<?php
$this->breadcrumbs[] = Yii::t('crud','Stores');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('store-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Stores'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'store-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
        array('header'=>'','value'=>'$data["itemLabel"]'),
        'store_id',
        array(
                    'name'=>'manager_staff_id',
                    'value'=>'CHtml::value($data,\'managerStaff.itemLabel\')',
                            'filter'=>CHtml::listData(Staff::model()->findAll(), 'staff_id', 'itemLabel'),
                            ),
        array(
                    'name'=>'address_id',
                    'value'=>'CHtml::value($data,\'address.itemLabel\')',
                            'filter'=>CHtml::listData(Address::model()->findAll(), 'address_id', 'itemLabel'),
                            ),
        'last_update',
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('store_id' => \$data->store_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('store_id' => \$data->store_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('store_id' => \$data->store_id))",
        ),
    ),
)); ?>