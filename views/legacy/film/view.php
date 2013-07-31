<?php
$this->breadcrumbs['Films'] = array('index');
$this->breadcrumbs[] = $model->film_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->film_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->film_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> Film <?php echo $model->film_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
        'film_id',
        'title',
        'description',
        'release_year',
        array(
            'name'=>'language_id',
            'value'=>($model->language !== null)?CHtml::link($model->language->itemLabel, array('/sakila/legacy/language/view','language_id'=>$model->language->language_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/language/update','language_id'=>$model->language->language_id), array('class'=>'edit')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'original_language_id',
            'value'=>($model->originalLanguage !== null)?CHtml::link($model->originalLanguage->itemLabel, array('/sakila/legacy/language/view','language_id'=>$model->originalLanguage->language_id)).' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/language/update','language_id'=>$model->originalLanguage->language_id), array('class'=>'edit')):'n/a',
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
)); ?>


<h2><?php echo CHtml::link(Yii::t('app','Actors'), array('/sakila/legacy/actor/admin'));?></h2>
<ul>
                <?php if (is_array($model->actors)) foreach($model->actors as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/actor/view','actor_id'=>$foreignobj->actor_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/actor/update','actor_id'=>$foreignobj->actor_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/actor/create', 'Actor' => array('film_actor(film_id, actor_id)'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Categories'), array('/sakila/legacy/category/admin'));?></h2>
<ul>
                <?php if (is_array($model->categories)) foreach($model->categories as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/category/view','category_id'=>$foreignobj->category_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/category/update','category_id'=>$foreignobj->category_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/category/create', 'Category' => array('film_category(film_id, category_id)'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Inventories'), array('/sakila/legacy/inventory/admin'));?></h2>
<ul>
                <?php if (is_array($model->inventories)) foreach($model->inventories as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/legacy/inventory/view','inventory_id'=>$foreignobj->inventory_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/legacy/inventory/update','inventory_id'=>$foreignobj->inventory_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/legacy/inventory/create', 'Inventory' => array('film_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>