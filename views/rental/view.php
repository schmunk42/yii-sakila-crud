<?php
$this->breadcrumbs[Yii::t('crud','Rentals')] = array('admin');
$this->breadcrumbs[] = $model->rental_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Rental')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->rental_id ?></small></h1>



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
            'rental_id',
        'rental_date',
        array(
            'name'=>'inventory_id',
            'value'=>($model->inventory !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->inventory->itemLabel,
                            array('inventory/view','inventory_id'=>$model->inventory->inventory_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('inventory/update','inventory_id'=>$model->inventory->inventory_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'customer_id',
            'value'=>($model->customer !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->customer->itemLabel,
                            array('customer/view','customer_id'=>$model->customer->customer_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('customer/update','customer_id'=>$model->customer->customer_id),
                            array('class'=>'')):'n/a',
            'type'=>'html',
        ),
        'return_date',
        array(
            'name'=>'staff_id',
            'value'=>($model->staff !== null)?CHtml::link(
                            '<i class="icon icon-circle-arrow-left"></i> '.$model->staff->itemLabel,
                            array('staff/view','staff_id'=>$model->staff->staff_id),
                            array('class'=>'')).' '.CHtml::link(
                            '<i class="icon icon-pencil"></i> ',
                            array('staff/update','staff_id'=>$model->staff->staff_id),
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