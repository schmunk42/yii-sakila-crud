<div class="crud-form">

    <?php
            Yii::app()->bootstrap->registerAssetCss('select2.css');
            Yii::app()->bootstrap->registerAssetJs('select2.js');
            Yii::app()->clientScript->registerScript('crud/variant/update','$(".crud-form select").select2();');

        $form=$this->beginWidget('CActiveForm', array(
            'id'=>'rental-form',
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
                                <?php echo $form->labelEx($model,'rental_date') ?>
                            </div>
                            <div class='controls'>
                                                               <?php echo $form->textField($model,'rental_date') ?>
                               <?php echo $form->error($model,'rental_date') ?>
                                <span class="help-block">
                                    <?php echo ($t = Yii::t('crud', 'Rental.rental_date') != 'Rental.rental_date')?$t:'' ?>
                                </span>
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <div class='control-label'>
                                <?php echo $form->labelEx($model,'return_date') ?>
                            </div>
                            <div class='controls'>
                                                               <?php echo $form->textField($model,'return_date') ?>
                               <?php echo $form->error($model,'return_date') ?>
                                <span class="help-block">
                                    <?php echo ($t = Yii::t('crud', 'Rental.return_date') != 'Rental.return_date')?$t:'' ?>
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
                                    <?php echo ($t = Yii::t('crud', 'Rental.last_update') != 'Rental.last_update')?$t:'' ?>
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
                        <?php echo Yii::t('crud', 'staff'); ?>
                    </h3>
                    <?php $this->widget(
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
                        ) ?>
                
                                        <h3>
                        <?php echo Yii::t('crud', 'inventory'); ?>
                    </h3>
                    <?php $this->widget(
                    'Relation',
                    array(
                            'model' => $model,
                            'relation' => 'inventory',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ) ?>
                
                                        <h3>
                        <?php echo Yii::t('crud', 'customer'); ?>
                    </h3>
                    <?php $this->widget(
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
                'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('slim/rental/admin'),
                'class' => 'btn'
            ));
            echo ' '.CHtml::submitButton(Yii::t('crud', 'Save'), array(
                'class' => 'btn btn-primary'
            ));
        ?>
    </div>

    <?php $this->endWidget() ?>
</div> <!-- form -->