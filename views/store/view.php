<?php
$this->breadcrumbs[Yii::t('crud','Stores')] = array('admin');
$this->breadcrumbs[] = $model->store_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Store')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->store_id ?></small></h1>



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
            'store_id',
        array(
            'name'=>'manager_staff_id',
            'value'=>($model->managerStaff !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->managerStaff->itemLabel,
                            array('staff/view','staff_id'=>$model->managerStaff->staff_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('staff/update','staff_id'=>$model->managerStaff->staff_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'address_id',
            'value'=>($model->address !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->address->itemLabel,
                            array('address/view','address_id'=>$model->address->address_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('address/update','address_id'=>$model->address->address_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        'last_update',
),
        )); ?>
    </div>

    <div class="span4">
        
        <?php $this->renderPartial('_view-relations',array('model'=>$model)); ?>
            </div>
</div>