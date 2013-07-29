    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
                <?php
                $input = $this->widget(
                    'Relation',
                    array(
                            'model' => $model,
                            'relation' => 'customer',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        , true);
                echo $form->customRow($model, 'customer_id', $input);
                ?>

                            <?php
                            $formId = 'payment-customer_id-'.\uniqid().'-form';
                            ?>
                            
                                <div class="control-group">
                                    <div class="controls">
                                        <?php
                                        echo $this->widget('bootstrap.widgets.TbButton', array(
                                            'label' => Yii::t('crud', 'Create {model}', array('{model}' => Yii::t('crud', 'Customer'))),
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
                            $this->renderPartial('//sakila/hybrid/customer/_modal_form', array(
                                'formId' => $formId,
                                'inputSelector' => '#Payment_customer_id',
                                'model' => new Customer,
                                'pk' => 'customer_id',
                                'field' => 'itemLabel',
                            ));
                            $this->endClip();
                            ?>
                            
                        
                <?php
                $input = $this->widget(
                    'Relation',
                    array(
                            'model' => $model,
                            'relation' => 'staff',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        , true);
                echo $form->customRow($model, 'staff_id', $input);
                ?>

                            <?php
                            $formId = 'payment-staff_id-'.\uniqid().'-form';
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
                                'inputSelector' => '#Payment_staff_id',
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
                            'relation' => 'rental',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        , true);
                echo $form->customRow($model, 'rental_id', $input);
                ?>

                            <?php
                            $formId = 'payment-rental_id-'.\uniqid().'-form';
                            ?>
                            
                                <div class="control-group">
                                    <div class="controls">
                                        <?php
                                        echo $this->widget('bootstrap.widgets.TbButton', array(
                                            'label' => Yii::t('crud', 'Create {model}', array('{model}' => Yii::t('crud', 'Rental'))),
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
                            $this->renderPartial('//sakila/hybrid/rental/_modal_form', array(
                                'formId' => $formId,
                                'inputSelector' => '#Payment_rental_id',
                                'model' => new Rental,
                                'pk' => 'rental_id',
                                'field' => 'itemLabel',
                            ));
                            $this->endClip();
                            ?>
                            
                        
    <?php echo $form->textFieldRow($model,'amount',array('maxlength'=>5)); ?>

    <?php echo $form->textFieldRow($model,'payment_date'); ?>

    <?php echo $form->textFieldRow($model,'last_update'); ?>

            </div>
        </div>
        <!-- main inputs -->

        <div class="span4"> <!-- sub inputs -->
            

        </div>
        <!-- sub inputs -->
    </div>
