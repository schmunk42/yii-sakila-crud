    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
    <?php echo $form->textFieldRow($model,'address',array('maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'address2',array('maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'district',array('maxlength'=>20)); ?>

                <?php
                $input = ;
                echo $form->customRow($model, 'city_id', $input);
                ?>

                            <?php
                            $formId = 'address-city_id-'.\uniqid().'-form';
                            ?>
                            
                                <div class="control-group">
                                    <div class="controls">
                                        <?php
                                        echo $this->widget('bootstrap.widgets.TbButton', array(
                                            'label' => Yii::t('crud', 'Create {model}', array('{model}' => Yii::t('crud', 'City'))),
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
                            $this->renderPartial('//sakila/hybrid/city/_modal_form', array(
                                'formId' => $formId,
                                'inputSelector' => '#Address_city_id',
                                'model' => new City,
                                'pk' => 'city_id',
                                'field' => 'itemLabel',
                            ));
                            $this->endClip();
                            ?>
                            
                        
    <?php echo $form->textFieldRow($model,'postal_code',array('maxlength'=>10)); ?>

    <?php echo $form->textFieldRow($model,'phone',array('maxlength'=>20)); ?>

    <?php echo $form->textFieldRow($model,'last_update'); ?>

            </div>
        </div>
        <!-- main inputs -->

        <div class="span4"> <!-- sub inputs -->
            

        </div>
        <!-- sub inputs -->
    </div>
