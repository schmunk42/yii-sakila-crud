
<?php
$this->breadcrumbs[] = Yii::t('crud','Rentals');
Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
    });
    $('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
            'rental-grid',
            {data: $(this).serialize()}
        );
        return false;
    });
    ");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    
    <?php echo Yii::t('crud', 'Rentals'); ?>
    <small><?php echo Yii::t('crud', 'Manage'); ?></small>
    
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>



<?php
$this->widget('TbGridView',
    array(
        'id'=>'rental-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'template'=>'{pager}{items}{pager}{summary}',
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
        'columns'=> array(
            array(
                'class'=>'CLinkColumn',
                'header'=>'',
                'labelExpression'=> '$data->itemLabel',
                'urlExpression'=> 'Yii::app()->controller->createUrl("view", array("rental_id" => $data["rental_id"]))'
            ),
                    array(
            'class' => 'editable.EditableColumn',
            'name' => 'rental_id',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/rental/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'rental_date',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/rental/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
                    'name'=>'inventory_id',
                    'value'=>'CHtml::value($data,\'inventory.itemLabel\')',
                            'filter'=>CHtml::listData(Inventory::model()->findAll(array('limit'=>1000)), 'inventory_id', 'itemLabel'),
                            ),
        array(
                    'name'=>'customer_id',
                    'value'=>'CHtml::value($data,\'customer.itemLabel\')',
                            'filter'=>CHtml::listData(Customer::model()->findAll(array('limit'=>1000)), 'customer_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'return_date',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/rental/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
                    'name'=>'staff_id',
                    'value'=>'CHtml::value($data,\'staff.itemLabel\')',
                            'filter'=>CHtml::listData(Staff::model()->findAll(array('limit'=>1000)), 'staff_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/rental/editableSaver'),
                //'placement' => 'right',
            )
        ),

            array(
                'class'=>'TbButtonColumn',
                'viewButtonUrl'   => 'Yii::app()->controller->createUrl("view", array("rental_id" => $data->rental_id))',
                'updateButtonUrl' => 'Yii::app()->controller->createUrl("update", array("rental_id" => $data->rental_id))',
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("delete", array("rental_id" => $data->rental_id))',
            ),
        )
    )
);
?>