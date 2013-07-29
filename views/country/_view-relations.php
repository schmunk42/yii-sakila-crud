
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    


        <!-- CHasManyRelation City BEGIN -->
        <div class='control-group'>
            <p>
<?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Cities',
                'icon'=>'icon-list-alt',
                'url'=> array('city/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    'city/create',
                    'City' => array('country_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
            </p>
            <ul class='relations'>
<?php
    if (is_array($model->cities)) {
            foreach($model->cities as $relatedModel) {
                echo '<li>';
                echo CHtml::link(
                    '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                    array('city/view','city_id'=>$relatedModel->city_id), array('class'=>'')
                );
                echo CHtml::link(
                    ' <i class="icon icon-pencil"></i>',
                    array('city/update','city_id'=>$relatedModel->city_id), array('class'=>'')
                );
                echo '</li>';
            }
    }
?>
            </ul>
        </div> <!-- control-group -->
