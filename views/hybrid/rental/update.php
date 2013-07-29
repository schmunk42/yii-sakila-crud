<?php
$this->breadcrumbs[Yii::t('crud','Rentals')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Rental')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->rental_id ?></small></h1>

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
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/payment/create','Payment' => array('rental_id'=>$model->payment_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
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
                    'name'=>'staff_id',
                    'value'=>'CHtml::value($data,\'staff.itemLabel\')',
                            'filter'=>CHtml::listData(Staff::model()->findAll(), 'staff_id', 'itemLabel'),
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

