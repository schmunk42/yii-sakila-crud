<?php

Yii::import('sakila.models.giix._base.BaseActor');

class Actor extends BaseActor
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}