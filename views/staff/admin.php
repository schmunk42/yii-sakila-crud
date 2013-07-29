<?php
$this->breadcrumbs[] = Yii::t('crud','Staffs');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('staff-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Staffs'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'staff-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
        array('header'=>'','value'=>'$data["itemLabel"]'),
        'staff_id',
        'first_name',
        'last_name',
        array(
                    'name'=>'address_id',
                    'value'=>'CHtml::value($data,\'address.itemLabel\')',
                            'filter'=>CHtml::listData(Address::model()->findAll(), 'address_id', 'itemLabel'),
                            ),
        'picture',
        'email',
        array(
                    'name'=>'store_id',
                    'value'=>'CHtml::value($data,\'store.itemLabel\')',
                            'filter'=>CHtml::listData(Store::model()->findAll(), 'store_id', 'itemLabel'),
                            ),
        /*
        'active',
        'username',
        'password',
        'last_update',
        */
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('staff_id' => \$data->staff_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('staff_id' => \$data->staff_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('staff_id' => \$data->staff_id))",
        ),
    ),
)); ?>