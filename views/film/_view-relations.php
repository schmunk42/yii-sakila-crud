
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    


        <!-- CManyManyRelation Actor BEGIN -->
        <div class='control-group'>
            <p>
<?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Actors',
                'icon'=>'icon-list-alt',
                'url'=> array('actor/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    'actor/create',
                    'Actor' => array('film_actor(film_id, actor_id)'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
            </p>
            <ul class='relations'>
<?php
    if (is_array($model->actors)) {
            foreach($model->actors as $relatedModel) {
                echo '<li>';
                echo CHtml::link(
                    '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                    array('actor/view','actor_id'=>$relatedModel->actor_id), array('class'=>'')
                );
                echo CHtml::link(
                    ' <i class="icon icon-pencil"></i>',
                    array('actor/update','actor_id'=>$relatedModel->actor_id), array('class'=>'')
                );
                echo '</li>';
            }
    }
?>
            </ul>
        </div> <!-- control-group -->



        <!-- CManyManyRelation Category BEGIN -->
        <div class='control-group'>
            <p>
<?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Categories',
                'icon'=>'icon-list-alt',
                'url'=> array('category/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    'category/create',
                    'Category' => array('film_category(film_id, category_id)'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
            </p>
            <ul class='relations'>
<?php
    if (is_array($model->categories)) {
            foreach($model->categories as $relatedModel) {
                echo '<li>';
                echo CHtml::link(
                    '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                    array('category/view','category_id'=>$relatedModel->category_id), array('class'=>'')
                );
                echo CHtml::link(
                    ' <i class="icon icon-pencil"></i>',
                    array('category/update','category_id'=>$relatedModel->category_id), array('class'=>'')
                );
                echo '</li>';
            }
    }
?>
            </ul>
        </div> <!-- control-group -->



        <!-- CHasManyRelation Inventory BEGIN -->
        <div class='control-group'>
            <p>
<?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Inventories',
                'icon'=>'icon-list-alt',
                'url'=> array('inventory/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    'inventory/create',
                    'Inventory' => array('film_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
            </p>
            <ul class='relations'>
<?php
    if (is_array($model->inventories)) {
            foreach($model->inventories as $relatedModel) {
                echo '<li>';
                echo CHtml::link(
                    '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                    array('inventory/view','inventory_id'=>$relatedModel->inventory_id), array('class'=>'')
                );
                echo CHtml::link(
                    ' <i class="icon icon-pencil"></i>',
                    array('inventory/update','inventory_id'=>$relatedModel->inventory_id), array('class'=>'')
                );
                echo '</li>';
            }
    }
?>
            </ul>
        </div> <!-- control-group -->
