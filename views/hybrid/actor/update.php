<?php
$this->breadcrumbs[Yii::t('crud','Actors')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Actor')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->actor_id ?></small></h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php
$this->renderPartial('_form', array(
'model'=>$model));
?>

<?php

/*
Code example to include an editable detail view:

<h2>
    <?php echo Yii::t('crud','Editable Detail View')?></h2>

<?php
$this->widget('EditableDetailView', array(
    'data' => $model,
    'url' => $this->createUrl('editableSaver'),
));
?>

*/
?>


<div class='well'>
    <div class='row'>
<div class='span3'><?php 
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array(
                'label'=>'Films',
                'icon'=>'icon-list-alt',
                'url'=> array('//sakila/hybrid/film/admin')
            ),
            array(
                'icon'=>'icon-plus',
                'url'=>array(
                    '//sakila/hybrid/film/create',
                    'Film' => array('film_actor(actor_id, film_id)'=>$model->{$model->tableSchema->primaryKey})
                    )
                ),
            ),
        )
    ); ?></div><div class='span8'>
<?php
    echo '<span class=label>CManyManyRelation</span>';
    if (is_array($model->films)) {

        echo CHtml::openTag('ul');
            foreach($model->films as $relatedModel) {

                echo '<li>';
                echo CHtml::link($relatedModel->itemLabel, array('/sakila/hybrid/film/view','film_id'=>$relatedModel->film_id), array('class'=>''));

                echo '</li>';
            }
        echo CHtml::closeTag('ul');
    }
?></div>
     </div> <!-- row -->
</div> <!-- well -->
