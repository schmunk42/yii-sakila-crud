<?php

/**
 * This is the model base class for the table "payment".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Payment".
 *
 * Columns in table "payment" available as properties of the model,
 * followed by relations of table "payment" available as properties of the model.
 *
 * @property integer $payment_id
 * @property integer $customer_id
 * @property integer $staff_id
 * @property integer $rental_id
 * @property string $amount
 * @property string $payment_date
 * @property string $last_update
 *
 * @property Rental $rental
 * @property Customer $customer
 * @property Staff $staff
 */
abstract class BasePayment extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'payment';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Payment|Payments', $n);
	}

	public static function representingColumn() {
		return 'amount';
	}

	public function rules() {
		return array(
			array('customer_id, staff_id, amount, payment_date, last_update', 'required'),
			array('customer_id, staff_id, rental_id', 'numerical', 'integerOnly'=>true),
			array('amount', 'length', 'max'=>5),
			array('rental_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('payment_id, customer_id, staff_id, rental_id, amount, payment_date, last_update', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'rental' => array(self::BELONGS_TO, 'Rental', 'rental_id'),
			'customer' => array(self::BELONGS_TO, 'Customer', 'customer_id'),
			'staff' => array(self::BELONGS_TO, 'Staff', 'staff_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'payment_id' => Yii::t('app', 'Payment'),
			'customer_id' => null,
			'staff_id' => null,
			'rental_id' => null,
			'amount' => Yii::t('app', 'Amount'),
			'payment_date' => Yii::t('app', 'Payment Date'),
			'last_update' => Yii::t('app', 'Last Update'),
			'rental' => null,
			'customer' => null,
			'staff' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('payment_id', $this->payment_id);
		$criteria->compare('customer_id', $this->customer_id);
		$criteria->compare('staff_id', $this->staff_id);
		$criteria->compare('rental_id', $this->rental_id);
		$criteria->compare('amount', $this->amount, true);
		$criteria->compare('payment_date', $this->payment_date, true);
		$criteria->compare('last_update', $this->last_update, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}