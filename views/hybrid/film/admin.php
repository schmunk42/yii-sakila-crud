<?php
$this->breadcrumbs[] = Yii::t('crud','Films');


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

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Films'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'film-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
        'film_id',
        'title',
#        'description',
        'release_year',
        array(
                    'name'=>'language_id',
                    'value'=>'CHtml::value($data,\'language.itemLabel\')',
                            'filter'=>CHtml::listData(Language::model()->findAll(), 'language_id', 'itemLabel'),
                            ),
        array(
                    'name'=>'original_language_id',
                    'value'=>'CHtml::value($data,\'originalLanguage.itemLabel\')',
                            'filter'=>CHtml::listData(Language::model()->findAll(), 'language_id', 'itemLabel'),
                            ),
        'rental_duration',
        'rental_rate',
        /*
        'length',
        'replacement_cost',
        'rating',
        'special_features',
        'last_update',
        */
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('film_id' => \$data->film_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('film_id' => \$data->film_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('film_id' => \$data->film_id))",
        ),
    ),
)); ?>
