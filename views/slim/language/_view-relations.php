
    <h2>
        <?php echo Yii::t('crud','Relations') ?>    </h2>

    
        <?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Films',
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/slim/film/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/slim/film/create',
                    'Film' => array('language_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
        <ul>

            <?php
            $records = $model->films(array('limit'=>1000));
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

    
        <?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Films1',
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/slim/film/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/slim/film/create',
                    'Film' => array('original_language_id'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?>
        <ul>

            <?php
            $records = $model->films1(array('limit'=>1000));
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

    