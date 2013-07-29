<?php
$this->breadcrumbs[] = Yii::t('crud','Addresses');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('address-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Addresses'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'address-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
        array('header'=>'','value'=>'$data["itemLabel"]'),
        'address_id',
        'address',
        'address2',
        'district',
        array(
                    'name'=>'city_id',
                    'value'=>'CHtml::value($data,\'city.itemLabel\')',
                            'filter'=>CHtml::listData(City::model()->findAll(), 'city_id', 'itemLabel'),
                            ),
        'postal_code',
        'phone',
        /*
        'last_update',
        */
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('address_id' => \$data->address_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('address_id' => \$data->address_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('address_id' => \$data->address_id))",
        ),
    ),
)); ?>
