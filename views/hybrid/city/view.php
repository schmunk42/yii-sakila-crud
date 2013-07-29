<?php
$this->breadcrumbs[Yii::t('crud','Cities')] = array('admin');
$this->breadcrumbs[] = $model->city_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','City')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->city_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('city_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->city_id), array('view', 'city_id'=>$model->city_id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('city')); ?>:</b>
    <?php echo CHtml::encode($model->city); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('country_id')); ?>:</b>
    <?php echo CHtml::encode($model->country_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('last_update')); ?>:</b>
    <?php echo CHtml::encode($model->last_update); ?>
    <br />


<h2><?php echo CHtml::link(Yii::t('app','Addresses'), array('/sakila/hybrid/address/admin'));?></h2>
<ul>
                <?php if (is_array($model->addresses)) foreach($model->addresses as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('/sakila/hybrid/address/view','address_id'=>$foreignobj->address_id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('/sakila/hybrid/address/update','address_id'=>$foreignobj->address_id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('/sakila/hybrid/address/create', 'Address' => array('city_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'city_id',
        'city',
        array(
            'name'=>'country_id',
            'value'=>($model->country !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->country->itemLabel, array('/sakila/hybrid/country/view','country_id'=>$model->country->country_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'last_update',
),
        )); ?></p>

