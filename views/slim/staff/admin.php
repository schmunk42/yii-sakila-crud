
<?php
$this->breadcrumbs[] = Yii::t('crud','Staffs');
Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
    });
    $('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
            'staff-grid',
            {data: $(this).serialize()}
        );
        return false;
    });
    ");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    
    <?php echo Yii::t('crud', 'Staffs'); ?>
    <small><?php echo Yii::t('crud', 'Manage'); ?></small>
    
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>



<?php
$this->widget('TbGridView',
    array(
        'id'=>'staff-grid',
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
                'urlExpression'=> 'Yii::app()->controller->createUrl("view", array("staff_id" => $data["staff_id"]))'
            ),
                    array(
            'class' => 'editable.EditableColumn',
            'name' => 'staff_id',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/staff/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'first_name',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/staff/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_name',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/staff/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
                    'name'=>'address_id',
                    'value'=>'CHtml::value($data,\'address.itemLabel\')',
                            'filter'=>CHtml::listData(Address::model()->findAll(), 'address_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'picture',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/staff/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'email',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/staff/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
                    'name'=>'store_id',
                    'value'=>'CHtml::value($data,\'store.itemLabel\')',
                            'filter'=>CHtml::listData(Store::model()->findAll(), 'store_id', 'itemLabel'),
                            ),
        /*
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'active',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/staff/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'username',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/staff/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'password',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/staff/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/staff/editableSaver'),
                'placement' => 'right',
            )
        ),
        */

            array(
                'class'=>'TbButtonColumn',
                'viewButtonUrl'   => 'Yii::app()->controller->createUrl("view", array("staff_id" => $data->staff_id))',
                'updateButtonUrl' => 'Yii::app()->controller->createUrl("update", array("staff_id" => $data->staff_id))',
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("delete", array("staff_id" => $data->staff_id))',
            ),
        )
    )
);
?>