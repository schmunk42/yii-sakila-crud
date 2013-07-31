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
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'film_id',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/film/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'title',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/film/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'release_year',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/film/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
                    'name'=>'language_id',
                    'value'=>'CHtml::value($data,\'language.itemLabel\')',
                            'filter'=>CHtml::listData(Language::model()->findAll(array('limit'=>1000)), 'language_id', 'itemLabel'),
                            ),
        array(
                    'name'=>'original_language_id',
                    'value'=>'CHtml::value($data,\'originalLanguage.itemLabel\')',
                            'filter'=>CHtml::listData(Language::model()->findAll(array('limit'=>1000)), 'language_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'rental_duration',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/film/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'rental_rate',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/film/editableSaver'),
                //'placement' => 'right',
            )
        ),
        /*
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'length',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/film/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'replacement_cost',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/film/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'rating',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/film/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'special_features',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/film/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/film/editableSaver'),
                //'placement' => 'right',
            )
        ),
        */
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('film_id' => \$data->film_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('film_id' => \$data->film_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('film_id' => \$data->film_id))",
        ),
    )
)); ?>
