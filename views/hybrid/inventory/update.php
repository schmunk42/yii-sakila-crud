<?php
$this->breadcrumbs[Yii::t('crud','Inventories')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Inventory')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->inventory_id ?></small></h1>

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
    <?php echo Yii::t('crud', 'Rentals'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/rental/create','Rental' => array('inventory_id'=>$model->rental_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('rentals');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/rental-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->rentals) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'rental_id',
                ,
        ,
        ,
        ,
        ,
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/rental/view', array('rental_id' => \$data->rental_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/rental/update', array('rental_id' => \$data->rental_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/rental/delete', array('rental_id' => \$data->rental_id))",
        ),
    ),
));
?>

