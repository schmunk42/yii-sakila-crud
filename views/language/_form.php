<div class="crud-form">

    <?php
            Yii::app()->bootstrap->registerAssetCss('select2.css');
            Yii::app()->bootstrap->registerAssetJs('select2.js');
            Yii::app()->clientScript->registerScript('crud/variant/update','$(".crud-form select").select2();');

        $form=$this->beginWidget('CActiveForm', array(
            'id'=>'language-form',
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
                                <?php echo $form->labelEx($model,'name') ?>
                            </div>
                            <div class='controls'>
                                                               <?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)) ?>
                               <?php echo $form->error($model,'name') ?>
                                <span class="help-block">
                                    <?php echo ($t = Yii::t('crud', 'Language.name') != 'Language.name')?$t:'' ?>
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
                                    <?php echo ($t = Yii::t('crud', 'Language.last_update') != 'Language.last_update')?$t:'' ?>
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
                'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('language/admin'),
                'class' => 'btn'
            ));
            echo ' '.CHtml::submitButton(Yii::t('crud', 'Save'), array(
                'class' => 'btn btn-primary'
            ));
        ?>
    </div>

    <?php $this->endWidget() ?>
</div> <!-- form -->