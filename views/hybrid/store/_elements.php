    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
                <?php
                $input = $this->widget(
                    'Relation',
                    array(
                            'model' => $model,
                            'relation' => 'managerStaff',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        , true);
                echo $form->customRow($model, 'manager_staff_id', $input);
                ?>

                            <?php
                            $formId = 'store-manager_staff_id-'.\uniqid().'-form';
                            ?>
                            
                                <div class="control-group">
                                    <div class="controls">
                                        <?php
                                        echo $this->widget('bootstrap.widgets.TbButton', array(
                                            'label' => Yii::t('crud', 'Create {model}', array('{model}' => Yii::t('crud', 'Staff'))),
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
                            $this->renderPartial('//sakila/hybrid/staff/_modal_form', array(
                                'formId' => $formId,
                                'inputSelector' => '#Store_manager_staff_id',
                                'model' => new Staff,
                                'pk' => 'staff_id',
                                'field' => 'itemLabel',
                            ));
                            $this->endClip();
                            ?>
                            
                        
                <?php
                $input = $this->widget(
                    'Relation',
                    array(
                            'model' => $model,
                            'relation' => 'address',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        , true);
                echo $form->customRow($model, 'address_id', $input);
                ?>

                            <?php
                            $formId = 'store-address_id-'.\uniqid().'-form';
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
                                'inputSelector' => '#Store_address_id',
                                'model' => new Address,
                                'pk' => 'address_id',
                                'field' => 'itemLabel',
                            ));
                            $this->endClip();
                            ?>
                            
                        
    <?php echo $form->textFieldRow($model,'last_update'); ?>

            </div>
        </div>
        <!-- main inputs -->

        <div class="span4"> <!-- sub inputs -->
            

        </div>
        <!-- sub inputs -->
    </div>
