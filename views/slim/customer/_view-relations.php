
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    


        <!-- CHasManyRelation Payment BEGIN -->
        <div class='control-group'>
            <p>
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
                    'Payment' => array('customer_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
            </p>
            <ul class='relations'>
<?php
    if (is_array($model->payments)) {
            foreach($model->payments as $relatedModel) {
                echo '<li>';
                echo CHtml::link(
                    '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                    array('/sakila/slim/payment/view','payment_id'=>$relatedModel->payment_id), array('class'=>'')
                );
                echo CHtml::link(
                    ' <i class="icon icon-pencil"></i>',
                    array('/sakila/slim/payment/update','payment_id'=>$relatedModel->payment_id), array('class'=>'')
                );
                echo '</li>';
            }
    }
?>
            </ul>
        </div> <!-- control-group -->



        <!-- CHasManyRelation Rental BEGIN -->
        <div class='control-group'>
            <p>
<?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Rentals',
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/slim/rental/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/slim/rental/create',
                    'Rental' => array('customer_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
            </p>
            <ul class='relations'>
<?php
    if (is_array($model->rentals)) {
            foreach($model->rentals as $relatedModel) {
                echo '<li>';
                echo CHtml::link(
                    '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                    array('/sakila/slim/rental/view','rental_id'=>$relatedModel->rental_id), array('class'=>'')
                );
                echo CHtml::link(
                    ' <i class="icon icon-pencil"></i>',
                    array('/sakila/slim/rental/update','rental_id'=>$relatedModel->rental_id), array('class'=>'')
                );
                echo '</li>';
            }
    }
?>
            </ul>
        </div> <!-- control-group -->
