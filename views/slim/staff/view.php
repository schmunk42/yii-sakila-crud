<?php
$this->breadcrumbs[Yii::t('crud','Staffs')] = array('admin');
$this->breadcrumbs[] = $model->staff_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Staff')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->staff_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>


<div class="row">
    <div class="span8">
        <h2>
            <?php echo Yii::t('crud','Data')?>        </h2>

        <h3>
            <?php echo $model->itemLabel?>        </h3>


        <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'staff_id',
        'first_name',
        'last_name',
        array(
            'name'=>'address_id',
            'value'=>($model->address !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->address->itemLabel,
                            array('/sakila/slim/address/view','address_id'=>$model->address->address_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('/sakila/slim/address/update','address_id'=>$model->address->address_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        'picture',
        'email',
        array(
            'name'=>'store_id',
            'value'=>($model->store !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->store->itemLabel,
                            array('/sakila/slim/store/view','store_id'=>$model->store->store_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('/sakila/slim/store/update','store_id'=>$model->store->store_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        'active',
        'username',
        'password',
        'last_update',
),
        )); ?>
    </div>

    <div class="span4">
        
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>
            </div>
</div>