
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    
        <?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Payments',
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/slim/payment/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/slim/payment/create',
                    'Payment' => array('rental_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
        <ul>

            <?php
            $records = $model->payments;
            if (is_array($records)) {
                foreach($records as $relatedModel) {
                    echo '<li>';
                    echo CHtml::link(
                        '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                        array('/sakila/slim/payment/view','payment_id'=>$relatedModel->payment_id)
                    );
                    echo CHtml::link(
                        ' <i class="icon icon-pencil"></i>',
                        array('/sakila/slim/payment/update','payment_id'=>$relatedModel->payment_id)
                    );
                    echo '</li>';
                }
            }
            ?>
        </ul>

    