<?php
$this->breadcrumbs[Yii::t('crud','Cities')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','City')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->city_id ?></small></h1>

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
    <?php echo Yii::t('crud', 'Addresses'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/address/create','Address' => array('city_id'=>$model->address_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('addresses');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/address-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->addresses) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'address_id',
                array(
            'class' => 'editable.EditableColumn',
            'name' => 'address',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'address2',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'district',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'postal_code',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'phone',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/address/view', array('address_id' => \$data->address_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/address/update', array('address_id' => \$data->address_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/address/delete', array('address_id' => \$data->address_id))",
        ),
    ),
));
?>

