<?php
$this->breadcrumbs['Categories'] = array('admin');
$this->breadcrumbs[] = Yii::t('app', 'Admin');

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('category-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<h1> <?php echo Yii::t('app', 'Manage'); ?> <?php echo Yii::t('app', 'Categories'); ?> </h1>


<ul><li>ManyMany <?php echo CHtml::link('Film', array('/sakila/legacy/film/admin')); ?> </li></ul>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>
<?php
$locale = CLocale::getInstance(Yii::app()->language);

 $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'category-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(


        ,
        ,
        ,
array(
'class'=>'CButtonColumn',
'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('category_id' => \$data->category_id))",
'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('category_id' => \$data->category_id))",
'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('category_id' => \$data->category_id))",

),
),
)); ?>


<?php echo CHtml::link('Create new Category', array('create')); ?>