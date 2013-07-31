<?php
$this->breadcrumbs[Yii::t('crud','Languages')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Language')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->language_id ?></small></h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php
$this->renderPartial('_form', array(
'model'=>$model));
?>

<?php

/*
Code example to include an editable detail view:

<h2>
    <?php echo Yii::t('crud','Editable Detail View')?></h2>

<?php
$this->widget('EditableDetailView', array(
    'data' => $model,
    'url' => $this->createUrl('editableSaver'),
));
?>

*/
?>



<h2>
    <?php echo Yii::t('crud', 'Films'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        // TODO
        #array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/film/create','Film' => array('language_id'=>$model->film_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('films');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/film-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->films) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'film_id',
                array(
            'class' => 'editable.EditableColumn',
            'name' => 'title',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'description',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'release_year',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
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
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'rental_rate',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'length',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        /*
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'replacement_cost',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'rating',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'special_features',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        */
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/film/view', array('film_id' => \$data->film_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/film/update', array('film_id' => \$data->film_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/film/delete', array('film_id' => \$data->film_id))",
        ),
    ),
));
?>


<h2>
    <?php echo Yii::t('crud', 'Films'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        // TODO
        #array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/film/create','Film' => array('original_language_id'=>$model->film_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('films1');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/film-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->films1) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'film_id',
                array(
            'class' => 'editable.EditableColumn',
            'name' => 'title',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'description',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'release_year',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
                    'name'=>'language_id',
                    'value'=>'CHtml::value($data,\'language.itemLabel\')',
                            'filter'=>CHtml::listData(Language::model()->findAll(array('limit'=>1000)), 'language_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'rental_duration',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'rental_rate',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'length',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        /*
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'replacement_cost',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'rating',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'special_features',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/language/editableSaver'),
                //'placement' => 'right',
            )
        ),
        */
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/film/view', array('film_id' => \$data->film_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/film/update', array('film_id' => \$data->film_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/film/delete', array('film_id' => \$data->film_id))",
        ),
    ),
));
?>

