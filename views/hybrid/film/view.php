<?php
$this->breadcrumbs[Yii::t('crud','Films')] = array('admin');
$this->breadcrumbs[] = $model->film_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Film')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->film_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('film_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->film_id), array('view', 'film_id'=>$model->film_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($model->title); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($model->description); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('release_year')); ?>:</b>
    <?php echo CHtml::encode($model->release_year); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('language_id')); ?>:</b>
    <?php echo CHtml::encode($model->language_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('original_language_id')); ?>:</b>
    <?php echo CHtml::encode($model->original_language_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('rental_duration')); ?>:</b>
    <?php echo CHtml::encode($model->rental_duration); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($model->getAttributeLabel('rental_rate')); ?>:</b>
    <?php echo CHtml::encode($model->rental_rate); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('length')); ?>:</b>
    <?php echo CHtml::encode($model->length); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('replacement_cost')); ?>:</b>
    <?php echo CHtml::encode($model->replacement_cost); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('rating')); ?>:</b>
    <?php echo CHtml::encode($model->rating); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('special_features')); ?>:</b>
    <?php echo CHtml::encode($model->special_features); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($model->last_update); ?>
    <br />

    */ ?>

<h2><?php echo CHtml::link(Yii::t('app','Actors'), array('/sakila/hybrid/actor/admin'));?></h2>
<ul>
                <?php if (is_array($model->actors)) foreach($model->actors as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/actor/view','actor_id'=>$foreignobj->actor_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/actor/update','actor_id'=>$foreignobj->actor_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/actor/create', 'Actor' => array('film_actor(film_id, actor_id)'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Categories'), array('/sakila/hybrid/category/admin'));?></h2>
<ul>
                <?php if (is_array($model->categories)) foreach($model->categories as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/category/view','category_id'=>$foreignobj->category_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/category/update','category_id'=>$foreignobj->category_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/category/create', 'Category' => array('film_category(film_id, category_id)'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Inventories'), array('/sakila/hybrid/inventory/admin'));?></h2>
<ul>
                <?php if (is_array($model->inventories)) foreach($model->inventories as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/inventory/view','inventory_id'=>$foreignobj->inventory_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/inventory/update','inventory_id'=>$foreignobj->inventory_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/inventory/create', 'Inventory' => array('film_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'film_id',
        'title',
        'description',
        'release_year',
        array(
            'name'=>'language_id',
            'value'=>($model->language !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->language->itemLabel, array('/sakila/hybrid/language/view','language_id'=>$model->language->language_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'original_language_id',
            'value'=>($model->originalLanguage !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->originalLanguage->itemLabel, array('/sakila/hybrid/language/view','language_id'=>$model->originalLanguage->language_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'rental_duration',
        'rental_rate',
        'length',
        'replacement_cost',
        'rating',
        'special_features',
        'last_update',
),
        )); ?></p>

