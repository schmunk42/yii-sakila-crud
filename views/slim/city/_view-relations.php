
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    
        <?php 
        echo '<h3>Addresses ';
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini',
        'buttons'=>array(
            array(
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/slim/address/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/slim/address/create',
                    'Address' => array('city_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    );
        echo '</h3>' ?>
        <ul>

            <?php
            $records = $model->addresses(array('limit'=>250));
            if (is_array($records)) {
                foreach($records as $i => $relatedModel) {
                    echo '<li>';
                    echo CHtml::link(
                        '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                        array('/sakila/slim/address/view','address_id'=>$relatedModel->address_id)
                    );
                    echo CHtml::link(
                        ' <i class="icon icon-pencil"></i>',
                        array('/sakila/slim/address/update','address_id'=>$relatedModel->address_id)
                    );
                    echo '</li>';
                }
            }
            ?>
        </ul>

    