<?php

Yii::import('sakila.models.giix._base.BaseCity');

class City extends BaseCity
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}