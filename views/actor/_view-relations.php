
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    


        <!-- CManyManyRelation Film BEGIN -->
        <div class='control-group'>
            <p>
<?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Films',
                'icon'=>'icon-list-alt',
                'url'=> array('film/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    'film/create',
                    'Film' => array('film_actor(actor_id, film_id)'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
            </p>
            <ul class='relations'>
<?php
    if (is_array($model->films)) {
            foreach($model->films as $relatedModel) {
                echo '<li>';
                echo CHtml::link(
                    '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                    array('film/view','film_id'=>$relatedModel->film_id), array('class'=>'')
                );
                echo CHtml::link(
                    ' <i class="icon icon-pencil"></i>',
                    array('film/update','film_id'=>$relatedModel->film_id), array('class'=>'')
                );
                echo '</li>';
            }
    }
?>
            </ul>
        </div> <!-- control-group -->
