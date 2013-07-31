    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
    <?php echo $form->textFieldRow($model,'title',array('maxlength'=>255)); ?>

    <?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

    <?php echo $form->textFieldRow($model,'release_year',array('maxlength'=>4)); ?>

                <?php
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
                    <?php  ?>
                
                                        <h3>
                        <?php echo Yii::t('crud', 'categories'); ?>
                    </h3>
                    <?php  ?>
                

        </div>
        <!-- sub inputs -->
    </div>
