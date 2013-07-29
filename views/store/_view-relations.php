
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    


        <!-- CHasManyRelation Customer BEGIN -->
        <div class='control-group'>
            <p>
<?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Customers',
                'icon'=>'icon-list-alt',
                'url'=> array('customer/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    'customer/create',
                    'Customer' => array('store_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
            </p>
            <ul class='relations'>
<?php
    if (is_array($model->customers)) {
            foreach($model->customers as $relatedModel) {
                echo '<li>';
                echo CHtml::link(
                    '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                    array('customer/view','customer_id'=>$relatedModel->customer_id), array('class'=>'')
                );
                echo CHtml::link(
                    ' <i class="icon icon-pencil"></i>',
                    array('customer/update','customer_id'=>$relatedModel->customer_id), array('class'=>'')
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
                    'Inventory' => array('store_id'=>$model->{$model->tableSchema->primaryKey})
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



        <!-- CHasManyRelation Staff BEGIN -->
        <div class='control-group'>
            <p>
<?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Staffs',
                'icon'=>'icon-list-alt',
                'url'=> array('staff/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    'staff/create',
                    'Staff' => array('store_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
            </p>
            <ul class='relations'>
<?php
    if (is_array($model->staffs)) {
            foreach($model->staffs as $relatedModel) {
                echo '<li>';
                echo CHtml::link(
                    '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                    array('staff/view','staff_id'=>$relatedModel->staff_id), array('class'=>'')
                );
                echo CHtml::link(
                    ' <i class="icon icon-pencil"></i>',
                    array('staff/update','staff_id'=>$relatedModel->staff_id), array('class'=>'')
                );
                echo '</li>';
            }
    }
?>
            </ul>
        </div> <!-- control-group -->
