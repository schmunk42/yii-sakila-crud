<?php

Yii::import('sakila.models.giix._base.BaseCountry');

class Country extends BaseCountry
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}