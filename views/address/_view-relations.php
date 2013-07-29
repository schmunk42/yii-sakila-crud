
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
                    'Customer' => array('address_id'=>$model->{$model->tableSchema->primaryKey})
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
                    'Staff' => array('address_id'=>$model->{$model->tableSchema->primaryKey})
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



        <!-- CHasManyRelation Store BEGIN -->
        <div class='control-group'>
            <p>
<?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Stores',
                'icon'=>'icon-list-alt',
                'url'=> array('store/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    'store/create',
                    'Store' => array('address_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
            </p>
            <ul class='relations'>
<?php
    if (is_array($model->stores)) {
            foreach($model->stores as $relatedModel) {
                echo '<li>';
                echo CHtml::link(
                    '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                    array('store/view','store_id'=>$relatedModel->store_id), array('class'=>'')
                );
                echo CHtml::link(
                    ' <i class="icon icon-pencil"></i>',
                    array('store/update','store_id'=>$relatedModel->store_id), array('class'=>'')
                );
                echo '</li>';
            }
    }
?>
            </ul>
        </div> <!-- control-group -->
