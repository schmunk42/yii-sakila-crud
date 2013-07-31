<div class="crud-form">

    
    <?php
        Yii::app()->bootstrap->registerAssetCss('select2.css');
        Yii::app()->bootstrap->registerAssetJs('select2.js');
        Yii::app()->clientScript->registerScript('crud/variant/update','$(".crud-form select").select2();');

        $form=$this->beginWidget('CActiveForm', array(
            'id'=>'address-form',
            'enableAjaxValidation'=>true,
            'enableClientValidation'=>true,
        ));

        echo $form->errorSummary($model);
    ?>
    
    <div class="row">
        <div class="span7"> <!-- main inputs -->
            <h2>
                <?php echo Yii::t('crud','Data')?>                <small>
                    <?php echo $model->itemLabel ?>
                </small>

            </h2>


            <div class="form-horizontal">

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php  ?>
                        </div>
                        <div class='controls'>
                            <?php
                            ;
                            echo $form->error($model,'address_id')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Address.address_id') != 'Address.address_id')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'address') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50));
                            echo $form->error($model,'address')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Address.address') != 'Address.address')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'address2') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'address2',array('size'=>50,'maxlength'=>50));
                            echo $form->error($model,'address2')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Address.address2') != 'Address.address2')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'district') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'district',array('size'=>20,'maxlength'=>20));
                            echo $form->error($model,'district')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Address.district') != 'Address.district')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'city_id') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'city',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        );
                            echo $form->error($model,'city_id')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Address.city_id') != 'Address.city_id')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'postal_code') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'postal_code',array('size'=>10,'maxlength'=>10));
                            echo $form->error($model,'postal_code')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Address.postal_code') != 'Address.postal_code')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'phone') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20));
                            echo $form->error($model,'phone')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Address.phone') != 'Address.phone')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'last_update') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'last_update');
                            echo $form->error($model,'last_update')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Address.last_update') != 'Address.last_update')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                            </div>
        </div>
        <!-- main inputs -->

        <div class="span5"> <!-- sub inputs -->
            <h2>
                <?php echo Yii::t('crud','Relations')?>
            </h2>
            
                
                
                
                <h3>
                    <?php echo Yii::t('crud', 'Customers'); ?>
                </h3>
                <?php echo '<i>Switch to view mode to edit related records.</i>' ?>
                
            
                
                
                <h3>
                    <?php echo Yii::t('crud', 'Staffs'); ?>
                </h3>
                <?php echo '<i>Switch to view mode to edit related records.</i>' ?>
                
            
                
                
                <h3>
                    <?php echo Yii::t('crud', 'Stores'); ?>
                </h3>
                <?php echo '<i>Switch to view mode to edit related records.</i>' ?>
                
            

        </div>
        <!-- sub inputs -->
    </div>

    <p class="alert">

        
        <?php echo Yii::t('crud','Fields with <span class="required">*</span> are required.');?>
        
    </p>

    <div class="form-actions">
        
        <?php
            echo CHtml::Button(
            Yii::t('crud', 'Cancel'), array(
                'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('slim/address/admin'),
                'class' => 'btn'
            ));
            echo ' '.CHtml::submitButton(Yii::t('crud', 'Save'), array(
                'class' => 'btn btn-primary'
            ));
        ?>
    </div>

    <?php $this->endWidget() ?>
</div> <!-- form -->