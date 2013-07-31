
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    
        <?php 
        echo '<h3>Films ';
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini',
        'buttons'=>array(
            array(
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/slim/film/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/slim/film/create',
                    'Film' => array('film_actor(actor_id, film_id)'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    );
        echo '</h3>' ?>
        <ul>

            <?php
            $records = $model->films(array('limit'=>250));
            if (is_array($records)) {
                foreach($records as $i => $relatedModel) {
                    echo '<li>';
                    echo CHtml::link(
                        '<i class="icon icon-arrow-right"></i> '.$relatedModel->itemLabel,
                        array('/sakila/slim/film/view','film_id'=>$relatedModel->film_id)
                    );
                    echo CHtml::link(
                        ' <i class="icon icon-pencil"></i>',
                        array('/sakila/slim/film/update','film_id'=>$relatedModel->film_id)
                    );
                    echo '</li>';
                }
            }
            ?>
        </ul>

    