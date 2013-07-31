    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
    <?php echo $form->textFieldRow($model,'first_name',array('maxlength'=>45)); ?>

    <?php echo $form->textFieldRow($model,'last_name',array('maxlength'=>45)); ?>

                <?php
                $input = ;
                echo $form->customRow($model, 'address_id', $input);
                ?>

                            <?php
                            $formId = 'staff-address_id-'.\uniqid().'-form';
                            ?>
                            
                                <div class="control-group">
                                    <div class="controls">
                                        <?php
                                        echo $this->widget('bootstrap.widgets.TbButton', array(
                                            'label' => Yii::t('crud', 'Create {model}', array('{model}' => Yii::t('crud', 'Address'))),
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
                            $this->renderPartial('//sakila/hybrid/address/_modal_form', array(
                                'formId' => $formId,
                                'inputSelector' => '#Staff_address_id',
                                'model' => new Address,
                                'pk' => 'address_id',
                                'field' => 'itemLabel',
                            ));
                            $this->endClip();
                            ?>
                            
                        
    <?php echo $form->textFieldRow($model,'picture'); ?>

    <?php echo $form->textFieldRow($model,'email',array('maxlength'=>50)); ?>

                <?php
                $input = ;
                echo $form->customRow($model, 'store_id', $input);
                ?>

                            <?php
                            $formId = 'staff-store_id-'.\uniqid().'-form';
                            ?>
                            
                                <div class="control-group">
                                    <div class="controls">
                                        <?php
                                        echo $this->widget('bootstrap.widgets.TbButton', array(
                                            'label' => Yii::t('crud', 'Create {model}', array('{model}' => Yii::t('crud', 'Store'))),
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
                            $this->renderPartial('//sakila/hybrid/store/_modal_form', array(
                                'formId' => $formId,
                                'inputSelector' => '#Staff_store_id',
                                'model' => new Store,
                                'pk' => 'store_id',
                                'field' => 'itemLabel',
                            ));
                            $this->endClip();
                            ?>
                            
                        
    <?php echo $form->textFieldRow($model,'active'); ?>

    <?php echo $form->textFieldRow($model,'username',array('maxlength'=>16)); ?>

    <?php echo $form->passwordFieldRow($model,'password',array('maxlength'=>40)); ?>

    <?php echo $form->textFieldRow($model,'last_update'); ?>

            </div>
        </div>
        <!-- main inputs -->

        <div class="span4"> <!-- sub inputs -->
            

        </div>
        <!-- sub inputs -->
    </div>
