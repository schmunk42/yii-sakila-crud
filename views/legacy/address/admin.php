<?php
$this->breadcrumbs['Addresses'] = array('admin');
$this->breadcrumbs[] = Yii::t('app', 'Admin');

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
<h1> <?php echo Yii::t('app', 'Manage'); ?> <?php echo Yii::t('app', 'Addresses'); ?> </h1>


<ul><li>BelongsTo <?php echo CHtml::link('City', array('/sakila/legacy/city/admin')); ?> </li><li>HasMany <?php echo CHtml::link('Customer', array('/sakila/legacy/customer/admin')); ?> </li><li>HasMany <?php echo CHtml::link('Staff', array('/sakila/legacy/staff/admin')); ?> </li><li>HasMany <?php echo CHtml::link('Store', array('/sakila/legacy/store/admin')); ?> </li></ul>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>
<?php
$locale = CLocale::getInstance(Yii::app()->language);

 $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'address-grid',
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
        */
array(
'class'=>'CButtonColumn',
'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('address_id' => \$data->address_id))",
'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('address_id' => \$data->address_id))",
'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('address_id' => \$data->address_id))",

),
),
)); ?>


<?php echo CHtml::link('Create new Address', array('create')); ?>