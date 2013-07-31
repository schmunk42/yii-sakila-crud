    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
                <?php
                $input = ;
                echo $form->customRow($model, 'film_id', $input);
                ?>

                            <?php
                            $formId = 'inventory-film_id-'.\uniqid().'-form';
                            ?>
                            
                                <div class="control-group">
                                    <div class="controls">
                                        <?php
                                        echo $this->widget('bootstrap.widgets.TbButton', array(
                                            'label' => Yii::t('crud', 'Create {model}', array('{model}' => Yii::t('crud', 'Film'))),
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
                            $this->renderPartial('//sakila/hybrid/film/_modal_form', array(
                                'formId' => $formId,
                                'inputSelector' => '#Inventory_film_id',
                                'model' => new Film,
                                'pk' => 'film_id',
                                'field' => 'itemLabel',
                            ));
                            $this->endClip();
                            ?>
                            
                        
                <?php
                $input = ;
                echo $form->customRow($model, 'store_id', $input);
                ?>

                            <?php
                            $formId = 'inventory-store_id-'.\uniqid().'-form';
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
                                'inputSelector' => '#Inventory_store_id',
                                'model' => new Store,
                                'pk' => 'store_id',
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
