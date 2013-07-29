    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
    <?php echo $form->textFieldRow($model,'film_id'); ?>

    <?php echo $form->textFieldRow($model,'title',array('maxlength'=>255)); ?>

    <?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

            </div>
        </div>
        <!-- main inputs -->

        <div class="span4"> <!-- sub inputs -->
            

        </div>
        <!-- sub inputs -->
    </div>
