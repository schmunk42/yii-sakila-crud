<p> The City <?php echo $model; ?> has been successfully
    created </p>

<?php echo CHtml::Button(Yii::t('app', 'Back'), array('id' => $relation.'_done')); ?><?php echo CHtml::Button(Yii::t('app', 'Add another City'), array('id' => $relation.'_create'));
