<?php

Yii::import('sakila.models.giix._base.BaseStore');

class Store extends BaseStore
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}