<?php

Yii::import('sakila.models.giix._base.BaseRental');

class Rental extends BaseRental
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}