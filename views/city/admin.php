<?php
$this->breadcrumbs[] = Yii::t('crud','Cities');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('city-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Cities'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'city-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
        array('header'=>'','value'=>'$data["itemLabel"]'),
        'city_id',
        'city',
        array(
                    'name'=>'country_id',
                    'value'=>'CHtml::value($data,\'country.itemLabel\')',
                            'filter'=>CHtml::listData(Country::model()->findAll(), 'country_id', 'itemLabel'),
                            ),
        'last_update',
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('city_id' => \$data->city_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('city_id' => \$data->city_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('city_id' => \$data->city_id))",
        ),
    ),
)); ?>
