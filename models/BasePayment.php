<?php

/**
 * This is the model base class for the table "payment".
 *
 * Columns in table "payment" available as properties of the model:
 * @property integer $payment_id
 * @property integer $customer_id
 * @property integer $staff_id
 * @property integer $rental_id
 * @property string $amount
 * @property string $payment_date
 * @property string $last_update
 *
 * Relations of table "payment" available as properties of the model:
 * @property Rental $rental
 * @property Customer $customer
 * @property Staff $staff
 */
abstract class BasePayment extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'payment';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('customer_id, staff_id, amount, payment_date, last_update', 'required'),
                array('rental_id', 'default', 'setOnEmpty' => true, 'value' => null),
                array('customer_id, staff_id, rental_id', 'numerical', 'integerOnly' => true),
                array('amount', 'length', 'max' => 5),
                array('payment_id, customer_id, staff_id, rental_id, amount, payment_date, last_update', 'safe', 'on' => 'search'),
            )
        );
    }

    public function getItemLabel()
    {
        return (string) $this->amount;
    }

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(), array(
                'savedRelated' => array(
                    'class' => 'gii-template-collection.components.GtcSaveRelationsBehavior'
                )
            )
        );
    }

    public function relations()
    {
        return array(
            'rental' => array(self::BELONGS_TO, 'Rental', 'rental_id'),
            'customer' => array(self::BELONGS_TO, 'Customer', 'customer_id'),
            'staff' => array(self::BELONGS_TO, 'Staff', 'staff_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'payment_id' => Yii::t('crud', 'Payment'),
            'customer_id' => Yii::t('crud', 'Customer'),
            'staff_id' => Yii::t('crud', 'Staff'),
            'rental_id' => Yii::t('crud', 'Rental'),
            'amount' => Yii::t('crud', 'Amount'),
            'payment_date' => Yii::t('crud', 'Payment Date'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.payment_id', $this->payment_id);
        $criteria->compare('t.customer_id', $this->customer_id);
        $criteria->compare('t.staff_id', $this->staff_id);
        $criteria->compare('t.rental_id', $this->rental_id);
        $criteria->compare('t.amount', $this->amount, true);
        $criteria->compare('t.payment_date', $this->payment_date, true);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}
