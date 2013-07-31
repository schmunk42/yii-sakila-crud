
<?php
$this->breadcrumbs[] = Yii::t('crud','Languages');
Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
    });
    $('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
            'language-grid',
            {data: $(this).serialize()}
        );
        return false;
    });
    ");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    
    <?php echo Yii::t('crud', 'Languages'); ?>
    <small><?php echo Yii::t('crud', 'Manage'); ?></small>
    
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>



<?php
$this->widget('TbGridView',
    array(
        'id'=>'language-grid',
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
                'urlExpression'=> 'Yii::app()->controller->createUrl("view", array("language_id" => $data["language_id"]))'
            ),
                    array(
            'class' => 'editable.EditableColumn',
            'name' => 'language_id',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/language/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'name',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/language/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/slim/language/editableSaver'),
                'placement' => 'right',
            )
        ),

            array(
                'class'=>'TbButtonColumn',
                'viewButtonUrl'   => 'Yii::app()->controller->createUrl("view", array("language_id" => $data->language_id))',
                'updateButtonUrl' => 'Yii::app()->controller->createUrl("update", array("language_id" => $data->language_id))',
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("delete", array("language_id" => $data->language_id))',
            ),
        )
    )
);
?>