<?php
$this->breadcrumbs['Films'] = array('admin');
$this->breadcrumbs[] = Yii::t('app', 'Admin');

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('film-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<h1> <?php echo Yii::t('app', 'Manage'); ?> <?php echo Yii::t('app', 'Films'); ?> </h1>


<ul><li>BelongsTo <?php echo CHtml::link('Language', array('/sakila/legacy/language/admin')); ?> </li><li>BelongsTo <?php echo CHtml::link('Language', array('/sakila/legacy/language/admin')); ?> </li><li>ManyMany <?php echo CHtml::link('Actor', array('/sakila/legacy/actor/admin')); ?> </li><li>ManyMany <?php echo CHtml::link('Category', array('/sakila/legacy/category/admin')); ?> </li><li>HasMany <?php echo CHtml::link('Inventory', array('/sakila/legacy/inventory/admin')); ?> </li></ul>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>
<?php
$locale = CLocale::getInstance(Yii::app()->language);

 $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'film-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(


        ,
        ,
#        ,
        ,
        ,
        ,
        /*
        ,
        ,
        ,
        ,
        ,
        ,
        ,
        */
array(
'class'=>'CButtonColumn',
'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('film_id' => \$data->film_id))",
'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('film_id' => \$data->film_id))",
'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('film_id' => \$data->film_id))",

),
),
)); ?>


<?php echo CHtml::link('Create new Film', array('create')); ?>