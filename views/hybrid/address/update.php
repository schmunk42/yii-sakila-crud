<?php
$this->breadcrumbs[Yii::t('crud','Addresses')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Address')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->address_id ?></small></h1>

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
        // TODO
        #array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/customer/create','Customer' => array('address_id'=>$model->customer_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
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
                array(
                    'name'=>'store_id',
                    'value'=>'CHtml::value($data,\'store.itemLabel\')',
                            'filter'=>CHtml::listData(Store::model()->findAll(array('limit'=>1000)), 'store_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'first_name',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_name',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'email',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'active',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'create_date',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
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
    <?php echo Yii::t('crud', 'Staffs'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        // TODO
        #array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/staff/create','Staff' => array('address_id'=>$model->staff_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
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
                array(
            'class' => 'editable.EditableColumn',
            'name' => 'first_name',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_name',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'picture',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'email',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
                    'name'=>'store_id',
                    'value'=>'CHtml::value($data,\'store.itemLabel\')',
                            'filter'=>CHtml::listData(Store::model()->findAll(array('limit'=>1000)), 'store_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'active',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'username',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        /*
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'password',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
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


<h2>
    <?php echo Yii::t('crud', 'Stores'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        // TODO
        #array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/store/create','Store' => array('address_id'=>$model->store_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('stores');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/store-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->stores) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'store_id',
                array(
                    'name'=>'manager_staff_id',
                    'value'=>'CHtml::value($data,\'managerStaff.itemLabel\')',
                            'filter'=>CHtml::listData(Staff::model()->findAll(array('limit'=>1000)), 'staff_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/store/view', array('store_id' => \$data->store_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/store/update', array('store_id' => \$data->store_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/store/delete', array('store_id' => \$data->store_id))",
        ),
    ),
));
?>

