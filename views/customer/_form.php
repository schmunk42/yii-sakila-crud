<div class="crud-form">

    <?php
            Yii::app()->bootstrap->registerAssetCss('select2.css');
            Yii::app()->bootstrap->registerAssetJs('select2.js');
            Yii::app()->clientScript->registerScript('crud/variant/update','$(".crud-form select").select2();');

        $form=$this->beginWidget('CActiveForm', array(
            'id'=>'customer-form',
            'enableAjaxValidation'=>true,
            'enableClientValidation'=>true,
        ));

        echo $form->errorSummary($model);
    ?>
    <div class="row">
        <div class="span8"> <!-- main inputs -->
            <h2>
                <?php echo Yii::t('crud','Data')?>
            </h2>

            <h3>
                <?php echo $model->itemLabel ?>
            </h3>

            <div class="form-horizontal">

                
                        <div class="control-group">
                            <div class='control-label'>
                                <?php echo $form->labelEx($model,'first_name') ?>
                            </div>
                            <div class='controls'>
                                                               <?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)) ?>
                               <?php echo $form->error($model,'first_name') ?>
                                <span class="help-block">
                                    <?php echo ($t = Yii::t('crud', 'Customer.first_name') != 'Customer.first_name')?$t:'' ?>
                                </span>
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <div class='control-label'>
                                <?php echo $form->labelEx($model,'last_name') ?>
                            </div>
                            <div class='controls'>
                                                               <?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)) ?>
                               <?php echo $form->error($model,'last_name') ?>
                                <span class="help-block">
                                    <?php echo ($t = Yii::t('crud', 'Customer.last_name') != 'Customer.last_name')?$t:'' ?>
                                </span>
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <div class='control-label'>
                                <?php echo $form->labelEx($model,'email') ?>
                            </div>
                            <div class='controls'>
                                                               <?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)) ?>
                               <?php echo $form->error($model,'email') ?>
                                <span class="help-block">
                                    <?php echo ($t = Yii::t('crud', 'Customer.email') != 'Customer.email')?$t:'' ?>
                                </span>
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <div class='control-label'>
                                <?php echo $form->labelEx($model,'active') ?>
                            </div>
                            <div class='controls'>
                                                               <?php echo $form->checkBox($model,'active') ?>
                               <?php echo $form->error($model,'active') ?>
                                <span class="help-block">
                                    <?php echo ($t = Yii::t('crud', 'Customer.active') != 'Customer.active')?$t:'' ?>
                                </span>
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <div class='control-label'>
                                <?php echo $form->labelEx($model,'create_date') ?>
                            </div>
                            <div class='controls'>
                                                               <?php echo $form->textField($model,'create_date') ?>
                               <?php echo $form->error($model,'create_date') ?>
                                <span class="help-block">
                                    <?php echo ($t = Yii::t('crud', 'Customer.create_date') != 'Customer.create_date')?$t:'' ?>
                                </span>
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <div class='control-label'>
                                <?php echo $form->labelEx($model,'last_update') ?>
                            </div>
                            <div class='controls'>
                                                               <?php echo $form->textField($model,'last_update') ?>
                               <?php echo $form->error($model,'last_update') ?>
                                <span class="help-block">
                                    <?php echo ($t = Yii::t('crud', 'Customer.last_update') != 'Customer.last_update')?$t:'' ?>
                                </span>
                            </div>
                        </div>
                                </div>
        </div>
        <!-- main inputs -->

        <div class="span4"> <!-- sub inputs -->
            <h2>
                <?php echo Yii::t('crud','Relations')?>
            </h2>
            
                                        <h3>
                        <?php echo Yii::t('crud', 'address'); ?>
                    </h3>
                    <?php $this->widget(
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
                        ) ?>
                
                                        <h3>
                        <?php echo Yii::t('crud', 'store'); ?>
                    </h3>
                    <?php $this->widget(
                    'Relation',
                    array(
                            'model' => $model,
                            'relation' => 'store',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ) ?>
                

        </div>
        <!-- sub inputs -->
    </div>

    <p class="alert">
        
        <?php
            echo Yii::t('crud','Fields with <span class="required">*</span> are required.');?>
    </p>

    <div class="form-actions">
        
        <?php
            echo CHtml::Button(
            Yii::t('crud', 'Cancel'), array(
                'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('customer/admin'),
                'class' => 'btn'
            ));
            echo ' '.CHtml::submitButton(Yii::t('crud', 'Save'), array(
                'class' => 'btn btn-primary'
            ));
        ?>
    </div>

    <?php $this->endWidget() ?>
</div> <!-- form -->