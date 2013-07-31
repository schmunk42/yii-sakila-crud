
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    
        <?php 
        echo '<h3>Rentals ';
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini',
        'buttons'=>array(
            array(
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/slim/rental/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/slim/rental/create',
                    'Rental' => array('inventory_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    );
        echo '</h3>' ?>
        <ul>

            <?php
            $records = $model->rentals(array('limit'=>250));
            if (is_array($records)) {
                foreach($records as $i => $relatedModel) {
                    echo '<li>';
                    echo CHtml::link(
                        '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                        array('/sakila/slim/rental/view','rental_id'=>$relatedModel->rental_id)
                    );
                    echo CHtml::link(
                        ' <i class="icon icon-pencil"></i>',
                        array('/sakila/slim/rental/update','rental_id'=>$relatedModel->rental_id)
                    );
                    echo '</li>';
                }
            }
            ?>
        </ul>

    