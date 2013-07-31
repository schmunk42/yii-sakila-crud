<?php
$this->breadcrumbs['Film Texts'] = array('admin');
$this->breadcrumbs[] = Yii::t('app', 'Admin');

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('film-text-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<h1> <?php echo Yii::t('app', 'Manage'); ?> <?php echo Yii::t('app', 'Film Texts'); ?> </h1>


<ul></ul>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>
<?php
$locale = CLocale::getInstance(Yii::app()->language);

 $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'film-text-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(


        ,
        ,
#        ,
array(
'class'=>'CButtonColumn',
'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('film_id' => \$data->film_id))",
'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('film_id' => \$data->film_id))",
'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('film_id' => \$data->film_id))",

),
),
)); ?>


<?php echo CHtml::link('Create new Film_text', array('create')); ?>