<?php
$this->breadcrumbs[] = Yii::t('crud','Rentals');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('rental-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Rentals'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'rental-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
        ,
        ,
        ,
        ,
        ,
        ,
        ,
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('rental_id' => \$data->rental_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('rental_id' => \$data->rental_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('rental_id' => \$data->rental_id))",
        ),
    ),
)); ?>
