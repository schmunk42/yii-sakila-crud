<?php
$this->breadcrumbs['Staffs'] = array('admin');
$this->breadcrumbs[] = Yii::t('app', 'Admin');

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
<h1> <?php echo Yii::t('app', 'Manage'); ?> <?php echo Yii::t('app', 'Staffs'); ?> </h1>


<ul><li>HasMany <?php echo CHtml::link('Payment', array('/sakila/legacy/payment/admin')); ?> </li><li>HasMany <?php echo CHtml::link('Rental', array('/sakila/legacy/rental/admin')); ?> </li><li>BelongsTo <?php echo CHtml::link('Store', array('/sakila/legacy/store/admin')); ?> </li><li>BelongsTo <?php echo CHtml::link('Address', array('/sakila/legacy/address/admin')); ?> </li><li>HasMany <?php echo CHtml::link('Store', array('/sakila/legacy/store/admin')); ?> </li></ul>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>
<?php
$locale = CLocale::getInstance(Yii::app()->language);

 $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'staff-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(


        ,
        ,
        ,
        ,
        ,
        ,
        /*
        ,
        ,
        ,
        ,
        ,
        */
array(
'class'=>'CButtonColumn',
'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('staff_id' => \$data->staff_id))",
'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('staff_id' => \$data->staff_id))",
'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('staff_id' => \$data->staff_id))",

),
),
)); ?>


<?php echo CHtml::link('Create new Staff', array('create')); ?>