<?php

/**
 * This is the model base class for the table "address".
 *
 * Columns in table "address" available as properties of the model:
 * @property integer $address_id
 * @property string $address
 * @property string $address2
 * @property string $district
 * @property integer $city_id
 * @property string $postal_code
 * @property string $phone
 * @property string $last_update
 *
 * Relations of table "address" available as properties of the model:
 * @property City $city
 * @property Customer[] $customers
 * @property Staff[] $staffs
 * @property Store[] $stores
 */
abstract class BaseAddress extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'address';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('address, district, city_id, phone, last_update', 'required'),
                array('address2, postal_code', 'default', 'setOnEmpty' => true, 'value' => null),
                array('city_id', 'numerical', 'integerOnly' => true),
                array('address, address2', 'length', 'max' => 50),
                array('district, phone', 'length', 'max' => 20),
                array('postal_code', 'length', 'max' => 10),
                array('address_id, address, address2, district, city_id, postal_code, phone, last_update', 'safe', 'on' => 'search'),
            )
        );
    }

    public function getItemLabel()
    {
        return (string) $this->address;
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
            'city' => array(self::BELONGS_TO, 'City', 'city_id'),
            'customers' => array(self::HAS_MANY, 'Customer', 'address_id'),
            'staffs' => array(self::HAS_MANY, 'Staff', 'address_id'),
            'stores' => array(self::HAS_MANY, 'Store', 'address_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'address_id' => Yii::t('crud', 'Address'),
            'address' => Yii::t('crud', 'Address'),
            'address2' => Yii::t('crud', 'Address2'),
            'district' => Yii::t('crud', 'District'),
            'city_id' => Yii::t('crud', 'City'),
            'postal_code' => Yii::t('crud', 'Postal Code'),
            'phone' => Yii::t('crud', 'Phone'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.address_id', $this->address_id);
        $criteria->compare('t.address', $this->address, true);
        $criteria->compare('t.address2', $this->address2, true);
        $criteria->compare('t.district', $this->district, true);
        $criteria->compare('t.city_id', $this->city_id);
        $criteria->compare('t.postal_code', $this->postal_code, true);
        $criteria->compare('t.phone', $this->phone, true);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}
