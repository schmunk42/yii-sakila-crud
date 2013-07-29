    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
    <?php echo $form->textFieldRow($model,'title',array('maxlength'=>255)); ?>

    <?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

    <?php echo $form->textFieldRow($model,'release_year',array('maxlength'=>4)); ?>

                <?php
                $input = $this->widget(
                    'Relation',
                    array(
                            'model' => $model,
                            'relation' => 'language',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        , true);
                echo $form->customRow($model, 'language_id', $input);
                ?>

                            <?php
                            $formId = 'film-language_id-'.\uniqid().'-form';
                            ?>
                            
                                <div class="control-group">
                                    <div class="controls">
                                        <?php
                                        echo $this->widget('bootstrap.widgets.TbButton', array(
                                            'label' => Yii::t('crud', 'Create {model}', array('{model}' => Yii::t('crud', 'Language'))),
                                            'icon' => 'icon-plus',
                                            'htmlOptions' => array(
                                                'data-toggle' => 'modal',
                                                'data-target' => '#'.$formId.'-modal',
                                            ),
                                            ), true);
                                        ?>
                                    </div>
                                </div>

                            <?php
                            $this->beginClip('modal:'.$formId.'-modal');
                            $this->renderPartial('//sakila/hybrid/language/_modal_form', array(
                                'formId' => $formId,
                                'inputSelector' => '#Film_language_id',
                                'model' => new Language,
                                'pk' => 'language_id',
                                'field' => 'itemLabel',
                            ));
                            $this->endClip();
                            ?>
                            
                        
                <?php
                $input = $this->widget(
                    'Relation',
                    array(
                            'model' => $model,
                            'relation' => 'originalLanguage',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        , true);
                echo $form->customRow($model, 'original_language_id', $input);
                ?>

                            <?php
                            $formId = 'film-original_language_id-'.\uniqid().'-form';
                            ?>
                            
                                <div class="control-group">
                                    <div class="controls">
                                        <?php
                                        echo $this->widget('bootstrap.widgets.TbButton', array(
                                            'label' => Yii::t('crud', 'Create {model}', array('{model}' => Yii::t('crud', 'Language'))),
                                            'icon' => 'icon-plus',
                                            'htmlOptions' => array(
                                                'data-toggle' => 'modal',
                                                'data-target' => '#'.$formId.'-modal',
                                            ),
                                            ), true);
                                        ?>
                                    </div>
                                </div>

                            <?php
                            $this->beginClip('modal:'.$formId.'-modal');
                            $this->renderPartial('//sakila/hybrid/language/_modal_form', array(
                                'formId' => $formId,
                                'inputSelector' => '#Film_original_language_id',
                                'model' => new Language,
                                'pk' => 'language_id',
                                'field' => 'itemLabel',
                            ));
                            $this->endClip();
                            ?>
                            
                        
    <?php echo $form->textFieldRow($model,'rental_duration'); ?>

    <?php echo $form->textFieldRow($model,'rental_rate',array('maxlength'=>4)); ?>

    <?php echo $form->textFieldRow($model,'length'); ?>

    <?php echo $form->textFieldRow($model,'replacement_cost',array('maxlength'=>5)); ?>

    <?php echo $form->textFieldRow($model,'rating',array('maxlength'=>5)); ?>

    <?php echo $form->textFieldRow($model,'special_features',array('maxlength'=>0)); ?>

    <?php echo $form->textFieldRow($model,'last_update'); ?>

            </div>
        </div>
        <!-- main inputs -->

        <div class="span4"> <!-- sub inputs -->
            
                                        <h3>
                        <?php echo Yii::t('crud', 'actors'); ?>
                    </h3>
                    <?php $this->widget(
                    'Relation',
                    array(
                            'model' => $model,
                            'relation' => 'actors',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'multiselect',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ) ?>
                
                                        <h3>
                        <?php echo Yii::t('crud', 'categories'); ?>
                    </h3>
                    <?php $this->widget(
                    'Relation',
                    array(
                            'model' => $model,
                            'relation' => 'categories',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'multiselect',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ) ?>
                

        </div>
        <!-- sub inputs -->
    </div>
