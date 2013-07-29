<?php
$this->breadcrumbs[Yii::t('crud','Staffs')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Staff')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->staff_id ?></small></h1>

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
    <?php echo Yii::t('crud', 'Payments'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/payment/create','Payment' => array('staff_id'=>$model->payment_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('payments');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/payment-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->payments) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'payment_id',
                array(
                    'name'=>'customer_id',
                    'value'=>'CHtml::value($data,\'customer.itemLabel\')',
                            'filter'=>CHtml::listData(Customer::model()->findAll(), 'customer_id', 'itemLabel'),
                            ),
        array(
                    'name'=>'rental_id',
                    'value'=>'CHtml::value($data,\'rental.itemLabel\')',
                            'filter'=>CHtml::listData(Rental::model()->findAll(), 'rental_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'amount',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/payment/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'payment_date',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/payment/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/payment/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/payment/view', array('payment_id' => \$data->payment_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/payment/update', array('payment_id' => \$data->payment_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/payment/delete', array('payment_id' => \$data->payment_id))",
        ),
    ),
));
?>


<h2>
    <?php echo Yii::t('crud', 'Rentals'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/rental/create','Rental' => array('staff_id'=>$model->rental_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
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
                array(
            'class' => 'editable.EditableColumn',
            'name' => 'rental_date',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/rental/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
                    'name'=>'inventory_id',
                    'value'=>'CHtml::value($data,\'inventory.itemLabel\')',
                            'filter'=>CHtml::listData(Inventory::model()->findAll(), 'inventory_id', 'itemLabel'),
                            ),
        array(
                    'name'=>'customer_id',
                    'value'=>'CHtml::value($data,\'customer.itemLabel\')',
                            'filter'=>CHtml::listData(Customer::model()->findAll(), 'customer_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'return_date',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/rental/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/rental/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/rental/view', array('rental_id' => \$data->rental_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/rental/update', array('rental_id' => \$data->rental_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/rental/delete', array('rental_id' => \$data->rental_id))",
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
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/store/create','Store' => array('manager_staff_id'=>$model->store_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
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
                    'name'=>'address_id',
                    'value'=>'CHtml::value($data,\'address.itemLabel\')',
                            'filter'=>CHtml::listData(Address::model()->findAll(), 'address_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/store/editableSaver'),
                'placement' => 'right',
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

