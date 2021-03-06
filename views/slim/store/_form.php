<div class="crud-form">

    
    <?php
        Yii::app()->bootstrap->registerAssetCss('select2.css');
        Yii::app()->bootstrap->registerAssetJs('select2.js');
        Yii::app()->clientScript->registerScript('crud/variant/update','$(".crud-form select").select2();');

        $form=$this->beginWidget('CActiveForm', array(
            'id'=>'store-form',
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
                            echo $form->error($model,'store_id')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Store.store_id') != 'Store.store_id')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'manager_staff_id') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'managerStaff',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        );
                            echo $form->error($model,'manager_staff_id')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Store.manager_staff_id') != 'Store.manager_staff_id')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'address_id') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'address',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        );
                            echo $form->error($model,'address_id')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Store.address_id') != 'Store.address_id')?$t:''
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
                                echo ($t = Yii::t('crud', 'Store.last_update') != 'Store.last_update')?$t:''
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
                    <?php echo Yii::t('crud', 'Inventories'); ?>
                </h3>
                <?php echo '<i>Switch to view mode to edit related records.</i>' ?>
                
            
                
                
                <h3>
                    <?php echo Yii::t('crud', 'Staffs'); ?>
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
                'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('slim/store/admin'),
                'class' => 'btn'
            ));
            echo ' '.CHtml::submitButton(Yii::t('crud', 'Save'), array(
                'class' => 'btn btn-primary'
            ));
        ?>
    </div>

    <?php $this->endWidget() ?>
</div> <!-- form -->