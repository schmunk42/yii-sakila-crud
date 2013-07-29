<?php
$this->breadcrumbs['Payments'] = array('index');
$this->breadcrumbs[] = Yii::t('app', 'Index');

if(!isset($this->menu) || $this->menu === array())
$this->menu=array(
array('label'=>Yii::t('app', 'Create'), 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage'), 'url'=>array('admin')),
);
?>

<h1>Payments</h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
