<?php
$this->breadcrumbs[] = Yii::t('crud','Addresses');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('address-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Addresses'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'address-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'address_id',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'address',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'address2',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'district',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
                    'name'=>'city_id',
                    'value'=>'CHtml::value($data,\'city.itemLabel\')',
                            'filter'=>CHtml::listData(City::model()->findAll(array('limit'=>1000)), 'city_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'postal_code',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'phone',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/address/editableSaver'),
                //'placement' => 'right',
            )
        ),
        /*
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
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('address_id' => \$data->address_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('address_id' => \$data->address_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('address_id' => \$data->address_id))",
        ),
    )
)); ?>
