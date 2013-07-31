
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    
        <?php 
        echo '<h3>Customers ';
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini',
        'buttons'=>array(
            array(
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/slim/customer/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/slim/customer/create',
                    'Customer' => array('store_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    );
        echo '</h3>' ?>
        <ul>

            <?php
            $records = $model->customers(array('limit'=>250));
            if (is_array($records)) {
                foreach($records as $i => $relatedModel) {
                    echo '<li>';
                    echo CHtml::link(
                        '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                        array('/sakila/slim/customer/view','customer_id'=>$relatedModel->customer_id)
                    );
                    echo CHtml::link(
                        ' <i class="icon icon-pencil"></i>',
                        array('/sakila/slim/customer/update','customer_id'=>$relatedModel->customer_id)
                    );
                    echo '</li>';
                }
            }
            ?>
        </ul>

    
        <?php 
        echo '<h3>Inventories ';
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini',
        'buttons'=>array(
            array(
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/slim/inventory/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/slim/inventory/create',
                    'Inventory' => array('store_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    );
        echo '</h3>' ?>
        <ul>

            <?php
            $records = $model->inventories(array('limit'=>250));
            if (is_array($records)) {
                foreach($records as $i => $relatedModel) {
                    echo '<li>';
                    echo CHtml::link(
                        '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                        array('/sakila/slim/inventory/view','inventory_id'=>$relatedModel->inventory_id)
                    );
                    echo CHtml::link(
                        ' <i class="icon icon-pencil"></i>',
                        array('/sakila/slim/inventory/update','inventory_id'=>$relatedModel->inventory_id)
                    );
                    echo '</li>';
                }
            }
            ?>
        </ul>

    
        <?php 
        echo '<h3>Staffs ';
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini',
        'buttons'=>array(
            array(
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/slim/staff/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/slim/staff/create',
                    'Staff' => array('store_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    );
        echo '</h3>' ?>
        <ul>

            <?php
            $records = $model->staffs(array('limit'=>250));
            if (is_array($records)) {
                foreach($records as $i => $relatedModel) {
                    echo '<li>';
                    echo CHtml::link(
                        '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                        array('/sakila/slim/staff/view','staff_id'=>$relatedModel->staff_id)
                    );
                    echo CHtml::link(
                        ' <i class="icon icon-pencil"></i>',
                        array('/sakila/slim/staff/update','staff_id'=>$relatedModel->staff_id)
                    );
                    echo '</li>';
                }
            }
            ?>
        </ul>

    