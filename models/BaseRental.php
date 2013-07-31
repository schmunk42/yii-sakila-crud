<?php

/**
 * This is the model base class for the table "rental".
 *
 * Columns in table "rental" available as properties of the model:
 * @property integer $rental_id
 * @property string $rental_date
 * @property integer $inventory_id
 * @property integer $customer_id
 * @property string $return_date
 * @property integer $staff_id
 * @property string $last_update
 *
 * Relations of table "rental" available as properties of the model:
 * @property Payment[] $payments
 * @property Staff $staff
 * @property Inventory $inventory
 * @property Customer $customer
 */
abstract class BaseRental extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'rental';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('rental_date, inventory_id, customer_id, staff_id, last_update', 'required'),
                array('return_date', 'default', 'setOnEmpty' => true, 'value' => null),
                array('inventory_id, customer_id, staff_id', 'numerical', 'integerOnly' => true),
                array('return_date', 'safe'),
                array('rental_id, rental_date, inventory_id, customer_id, return_date, staff_id, last_update', 'safe', 'on' => 'search'),
            )
        );
    }

    public function getItemLabel()
    {
        return (string) $this->rental_date;
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
            'payments' => array(self::HAS_MANY, 'Payment', 'rental_id'),
            'staff' => array(self::BELONGS_TO, 'Staff', 'staff_id'),
            'inventory' => array(self::BELONGS_TO, 'Inventory', 'inventory_id'),
            'customer' => array(self::BELONGS_TO, 'Customer', 'customer_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'rental_id' => Yii::t('crud', 'Rental'),
            'rental_date' => Yii::t('crud', 'Rental Date'),
            'inventory_id' => Yii::t('crud', 'Inventory'),
            'customer_id' => Yii::t('crud', 'Customer'),
            'return_date' => Yii::t('crud', 'Return Date'),
            'staff_id' => Yii::t('crud', 'Staff'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.rental_id', $this->rental_id);
        $criteria->compare('t.rental_date', $this->rental_date, true);
        $criteria->compare('t.inventory_id', $this->inventory_id);
        $criteria->compare('t.customer_id', $this->customer_id);
        $criteria->compare('t.return_date', $this->return_date, true);
        $criteria->compare('t.staff_id', $this->staff_id);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}
