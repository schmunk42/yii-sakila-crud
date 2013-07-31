<div class="crud-form">

    
    <?php
        Yii::app()->bootstrap->registerAssetCss('select2.css');
        Yii::app()->bootstrap->registerAssetJs('select2.js');
        Yii::app()->clientScript->registerScript('crud/variant/update','$(".crud-form select").select2();');

        $form=$this->beginWidget('CActiveForm', array(
            'id'=>'film-form',
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
                            echo $form->error($model,'film_id')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.film_id') != 'Film.film_id')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'title') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255));
                            echo $form->error($model,'title')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.title') != 'Film.title')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'description') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50));
                            echo $form->error($model,'description')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.description') != 'Film.description')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'release_year') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'release_year',array('size'=>4,'maxlength'=>4));
                            echo $form->error($model,'release_year')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.release_year') != 'Film.release_year')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'language_id') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'language',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        );
                            echo $form->error($model,'language_id')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.language_id') != 'Film.language_id')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'original_language_id') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'originalLanguage',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'dropdownlist',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        );
                            echo $form->error($model,'original_language_id')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.original_language_id') != 'Film.original_language_id')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'rental_duration') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'rental_duration');
                            echo $form->error($model,'rental_duration')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.rental_duration') != 'Film.rental_duration')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'rental_rate') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'rental_rate',array('size'=>4,'maxlength'=>4));
                            echo $form->error($model,'rental_rate')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.rental_rate') != 'Film.rental_rate')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'length') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'length');
                            echo $form->error($model,'length')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.length') != 'Film.length')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'replacement_cost') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'replacement_cost',array('size'=>5,'maxlength'=>5));
                            echo $form->error($model,'replacement_cost')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.replacement_cost') != 'Film.replacement_cost')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'rating') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo CHtml::activeDropDownList($model, 'rating', array(
            'G' => 'G' ,
            'PG' => 'PG' ,
            'PG-13' => 'PG-13' ,
            'R' => 'R' ,
            'NC-17' => 'NC-17' ,
));
                            echo $form->error($model,'rating')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.rating') != 'Film.rating')?$t:''
                                ?>
                                                            </span>
                        </div>
                    </div>

                
                    <div class="control-group">
                        <div class='control-label'>
                            <?php echo $form->labelEx($model,'special_features') ?>
                        </div>
                        <div class='controls'>
                            <?php
                            echo $form->textField($model,'special_features',array('size'=>0,'maxlength'=>0));
                            echo $form->error($model,'special_features')
                            ?>
                            <span class="help-block">
                                
                                <?php
                                echo ($t = Yii::t('crud', 'Film.special_features') != 'Film.special_features')?$t:''
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
                                echo ($t = Yii::t('crud', 'Film.last_update') != 'Film.last_update')?$t:''
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
                    <?php echo Yii::t('crud', 'Actors'); ?>
                </h3>
                <?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'actors',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'multiselect',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ) ?>
                
            
                
                
                <h3>
                    <?php echo Yii::t('crud', 'Categories'); ?>
                </h3>
                <?php $this->widget(
                        'GtcRelation',
                        array(
                            'model' => $model,
                            'relation' => 'categories',
                            'fields' => 'itemLabel',
                            'allowEmpty' => true,
                            'style' => 'multiselect',
                            'htmlOptions' => array(
                                'checkAll' => 'all'),
                            )
                        ) ?>
                
            
                
                
                <h3>
                    <?php echo Yii::t('crud', 'Inventories'); ?>
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
                'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('slim/film/admin'),
                'class' => 'btn'
            ));
            echo ' '.CHtml::submitButton(Yii::t('crud', 'Save'), array(
                'class' => 'btn btn-primary'
            ));
        ?>
    </div>

    <?php $this->endWidget() ?>
</div> <!-- form -->