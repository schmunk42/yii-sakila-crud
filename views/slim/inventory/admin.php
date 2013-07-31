
<?php
$this->breadcrumbs[] = Yii::t('crud','Inventories');
Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
    });
    $('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
            'inventory-grid',
            {data: $(this).serialize()}
        );
        return false;
    });
    ");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    
    <?php echo Yii::t('crud', 'Inventories'); ?>
    <small><?php echo Yii::t('crud', 'Manage'); ?></small>
    
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>



<?php
$this->widget('TbGridView',
    array(
        'id'=>'inventory-grid',
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
                'urlExpression'=> 'Yii::app()->controller->createUrl("view", array("inventory_id" => $data["inventory_id"]))'
            ),
                    array(
            'class' => 'editable.EditableColumn',
            'name' => 'inventory_id',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/inventory/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
                    'name'=>'film_id',
                    'value'=>'CHtml::value($data,\'film.itemLabel\')',
                            'filter'=>CHtml::listData(Film::model()->findAll(), 'film_id', 'itemLabel'),
                            ),
        array(
                    'name'=>'store_id',
                    'value'=>'CHtml::value($data,\'store.itemLabel\')',
                            'filter'=>CHtml::listData(Store::model()->findAll(), 'store_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/inventory/editableSaver'),
                'placement' => 'right',
            )
        ),

            array(
                'class'=>'TbButtonColumn',
                'viewButtonUrl'   => 'Yii::app()->controller->createUrl("view", array("inventory_id" => $data->inventory_id))',
                'updateButtonUrl' => 'Yii::app()->controller->createUrl("update", array("inventory_id" => $data->inventory_id))',
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("delete", array("inventory_id" => $data->inventory_id))',
            ),
        )
    )
);
?>