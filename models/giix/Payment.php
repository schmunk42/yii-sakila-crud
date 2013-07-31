<?php

Yii::import('sakila.models.giix._base.BasePayment');

class Payment extends BasePayment
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}