<?php

Yii::import('sakila.models.giix._base.BaseInventory');

class Inventory extends BaseInventory
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}