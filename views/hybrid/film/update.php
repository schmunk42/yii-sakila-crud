<?php
$this->breadcrumbs[Yii::t('crud','Films')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Film')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->film_id ?></small></h1>

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


<div class='well'>
    <div class='row'>
<div class='span3'><?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Actors',
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/hybrid/actor/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/hybrid/actor/create',
                    'Actor' => array('film_actor(film_id, actor_id)'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?></div><div class='span8'>
<?php
    echo '<span class=label>CManyManyRelation</span>';
    if (is_array($model->actors)) {

        echo CHtml::openTag('ul');
            foreach($model->actors as $relatedModel) {

                echo '<li>';
                echo CHtml::link($relatedModel->itemLabel, array('/sakila/hybrid/actor/view','actor_id'=>$relatedModel->actor_id), array('class'=>''));

                echo '</li>';
            }
        echo CHtml::closeTag('ul');
    }
?></div>
     </div> <!-- row -->
</div> <!-- well -->
<div class='well'>
    <div class='row'>
<div class='span3'><?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Categories',
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/hybrid/category/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/hybrid/category/create',
                    'Category' => array('film_category(film_id, category_id)'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?></div><div class='span8'>
<?php
    echo '<span class=label>CManyManyRelation</span>';
    if (is_array($model->categories)) {

        echo CHtml::openTag('ul');
            foreach($model->categories as $relatedModel) {

                echo '<li>';
                echo CHtml::link($relatedModel->itemLabel, array('/sakila/hybrid/category/view','category_id'=>$relatedModel->category_id), array('class'=>''));

                echo '</li>';
            }
        echo CHtml::closeTag('ul');
    }
?></div>
     </div> <!-- row -->
</div> <!-- well -->

<h2>
    <?php echo Yii::t('crud', 'Inventories'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('/sakila/hybrid/inventory/create','Inventory' => array('film_id'=>$model->inventory_id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $model->getRelatedSearchModel('inventories');
$this->widget('TbGridView',
    array(
        'id'=>'/sakila/hybrid/inventory-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->inventories) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'inventory_id',
                array(
                    'name'=>'store_id',
                    'value'=>'CHtml::value($data,\'store.itemLabel\')',
                            'filter'=>CHtml::listData(Store::model()->findAll(), 'store_id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'last_update',
            'editable' => array(
                'url' => $this->createUrl('/sakila/hybrid/inventory/editableSaver'),
                'placement' => 'right',
            )
        ),
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/inventory/view', array('inventory_id' => \$data->inventory_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/inventory/update', array('inventory_id' => \$data->inventory_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('/sakila/hybrid/inventory/delete', array('inventory_id' => \$data->inventory_id))",
        ),
    ),
));
?>

