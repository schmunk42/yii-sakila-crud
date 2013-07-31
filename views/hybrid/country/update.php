<?php
$this->breadcrumbs[Yii::t('crud','Countries')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Country')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->country_id ?></small></h1>

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
    <?php echo Yii::t('crud', 'Cities'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/city/create','City' => array('country_id'=>$model->city_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('cities');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/city-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->cities) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'city_id',
                ,
        ,
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/city/view', array('city_id' => \$data->city_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/city/update', array('city_id' => \$data->city_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/city/delete', array('city_id' => \$data->city_id))",
        ),
    ),
));
?>

