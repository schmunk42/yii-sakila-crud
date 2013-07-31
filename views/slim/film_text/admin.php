
<?php
$this->breadcrumbs[] = Yii::t('crud','Film Texts');
Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
    });
    $('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
            'film-text-grid',
            {data: $(this).serialize()}
        );
        return false;
    });
    ");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    
    <?php echo Yii::t('crud', 'Film Texts'); ?>
    <small><?php echo Yii::t('crud', 'Manage'); ?></small>
    
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>



<?php
$this->widget('TbGridView',
    array(
        'id'=>'film-text-grid',
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
                'urlExpression'=> 'Yii::app()->controller->createUrl("view", array("film_id" => $data["film_id"]))'
            ),
                    array(
            'class' => 'editable.EditableColumn',
            'name' => 'film_id',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/film_text/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'title',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/film_text/editableSaver'),
                //'placement' => 'right',
            )
        ),

            array(
                'class'=>'TbButtonColumn',
                'viewButtonUrl'   => 'Yii::app()->controller->createUrl("view", array("film_id" => $data->film_id))',
                'updateButtonUrl' => 'Yii::app()->controller->createUrl("update", array("film_id" => $data->film_id))',
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("delete", array("film_id" => $data->film_id))',
            ),
        )
    )
);
?>