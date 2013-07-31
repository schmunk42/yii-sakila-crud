<?php
$this->breadcrumbs[Yii::t('crud','Stores')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Store')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->store_id ?></small></h1>

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
    <?php echo Yii::t('crud', 'Customers'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/customer/create','Customer' => array('store_id'=>$model->customer_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('customers');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/customer-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->customers) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'customer_id',
                ,
        ,
        ,
        ,
        ,
        ,
        ,
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/customer/view', array('customer_id' => \$data->customer_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/customer/update', array('customer_id' => \$data->customer_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/customer/delete', array('customer_id' => \$data->customer_id))",
        ),
    ),
));
?>


<h2>
    <?php echo Yii::t('crud', 'Inventories'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/inventory/create','Inventory' => array('store_id'=>$model->inventory_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('inventories');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/inventory-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->inventories) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'inventory_id',
                ,
        ,
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/inventory/view', array('inventory_id' => \$data->inventory_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/inventory/update', array('inventory_id' => \$data->inventory_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/inventory/delete', array('inventory_id' => \$data->inventory_id))",
        ),
    ),
));
?>


<h2>
    <?php echo Yii::t('crud', 'Staffs'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/staff/create','Staff' => array('store_id'=>$model->staff_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('staffs');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/staff-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->staffs) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'staff_id',
                ,
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
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/staff/view', array('staff_id' => \$data->staff_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/staff/update', array('staff_id' => \$data->staff_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/staff/delete', array('staff_id' => \$data->staff_id))",
        ),
    ),
));
?>

