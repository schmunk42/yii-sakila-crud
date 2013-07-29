<?php
$this->breadcrumbs[Yii::t('crud','Inventories')] = array('admin');
$this->breadcrumbs[] = $model->inventory_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Inventory')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->inventory_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('inventory_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->inventory_id), array('view', 'inventory_id'=>$model->inventory_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('film_id')); ?>:</b>
    <?php echo CHtml::encode($model->film_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('store_id')); ?>:</b>
    <?php echo CHtml::encode($model->store_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($model->last_update); ?>
    <br />


<h2><?php echo CHtml::link(Yii::t('app','Rentals'), array('/sakila/hybrid/rental/admin'));?></h2>
<ul>
                <?php if (is_array($model->rentals)) foreach($model->rentals as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/rental/view','rental_id'=>$foreignobj->rental_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/rental/update','rental_id'=>$foreignobj->rental_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/rental/create', 'Rental' => array('inventory_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'inventory_id',
        array(
            'name'=>'film_id',
            'value'=>($model->film !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->film->itemLabel, array('/sakila/hybrid/film/view','film_id'=>$model->film->film_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'store_id',
            'value'=>($model->store !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->store->itemLabel, array('/sakila/hybrid/store/view','store_id'=>$model->store->store_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'last_update',
),
        )); ?></p>

