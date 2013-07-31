    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
    <?php echo $form->textFieldRow($model,'first_name',array('maxlength'=>45)); ?>

    <?php echo $form->textFieldRow($model,'last_name',array('maxlength'=>45)); ?>

    <?php echo $form->textFieldRow($model,'last_update'); ?>

            </div>
        </div>
        <!-- main inputs -->

        <div class="span4"> <!-- sub inputs -->
            
                                        <h3>
                        <?php echo Yii::t('crud', 'films'); ?>
                    </h3>
                    <?php  ?>
                

        </div>
        <!-- sub inputs -->
    </div>
