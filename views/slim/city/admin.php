
<?php
$this->breadcrumbs[] = Yii::t('crud','Cities');
Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
    });
    $('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
            'city-grid',
            {data: $(this).serialize()}
        );
        return false;
    });
    ");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    
    <?php echo Yii::t('crud', 'Cities'); ?>
    <small><?php echo Yii::t('crud', 'Manage'); ?></small>
    
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>



<?php
$this->widget('TbGridView',
    array(
        'id'=>'city-grid',
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
                'urlExpression'=> 'Yii::app()->controller->createUrl("view", array("city_id" => $data["city_id"]))'
            ),
                    array(
            'class' => 'editable.EditableColumn',
            'name' => 'city_id',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/city/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'city',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/city/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
                    'name'=>'country_id',
                    'value'=>'CHtml::value($data,\'country.itemLabel\')',
                            'filter'=>CHtml::listData(Country::model()->findAll(array('limit'=>1000)), 'country_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/city/editableSaver'),
                //'placement' => 'right',
            )
        ),

            array(
                'class'=>'TbButtonColumn',
                'viewButtonUrl'   => 'Yii::app()->controller->createUrl("view", array("city_id" => $data->city_id))',
                'updateButtonUrl' => 'Yii::app()->controller->createUrl("update", array("city_id" => $data->city_id))',
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("delete", array("city_id" => $data->city_id))',
            ),
        )
    )
);
?>