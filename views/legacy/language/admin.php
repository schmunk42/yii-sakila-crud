<?php
$this->breadcrumbs['Languages'] = array('admin');
$this->breadcrumbs[] = Yii::t('app', 'Admin');

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('language-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<h1> <?php echo Yii::t('app', 'Manage'); ?> <?php echo Yii::t('app', 'Languages'); ?> </h1>


<ul><li>HasMany <?php echo CHtml::link('Film', array('/sakila/legacy/film/admin')); ?> </li><li>HasMany <?php echo CHtml::link('Film', array('/sakila/legacy/film/admin')); ?> </li></ul>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>
<?php
$locale = CLocale::getInstance(Yii::app()->language);

 $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'language-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(


        ,
        ,
        ,
array(
'class'=>'CButtonColumn',
'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('language_id' => \$data->language_id))",
'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('language_id' => \$data->language_id))",
'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('language_id' => \$data->language_id))",

),
),
)); ?>


<?php echo CHtml::link('Create new Language', array('create')); ?>