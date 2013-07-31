<?php

/**
 * This is the model base class for the table "staff".
 *
 * Columns in table "staff" available as properties of the model:
 * @property integer $staff_id
 * @property string $first_name
 * @property string $last_name
 * @property integer $address_id
 * @property string $picture
 * @property string $email
 * @property integer $store_id
 * @property integer $active
 * @property string $username
 * @property string $password
 * @property string $last_update
 *
 * Relations of table "staff" available as properties of the model:
 * @property Payment[] $payments
 * @property Rental[] $rentals
 * @property Store $store
 * @property Address $address
 * @property Store[] $stores
 */
abstract class BaseStaff extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'staff';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('first_name, last_name, address_id, store_id, username, last_update', 'required'),
                array('picture, email, active, password', 'default', 'setOnEmpty' => true, 'value' => null),
                array('address_id, store_id, active', 'numerical', 'integerOnly' => true),
                array('first_name, last_name', 'length', 'max' => 45),
                array('email', 'length', 'max' => 50),
                array('username', 'length', 'max' => 16),
                array('password', 'length', 'max' => 40),
                array('picture', 'safe'),
                array('staff_id, first_name, last_name, address_id, picture, email, store_id, active, username, password, last_update', 'safe', 'on' => 'search'),
            )
        );
    }

    public function getItemLabel()
    {
        return (string) $this->first_name;
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
            'payments' => array(self::HAS_MANY, 'Payment', 'staff_id'),
            'rentals' => array(self::HAS_MANY, 'Rental', 'staff_id'),
            'store' => array(self::BELONGS_TO, 'Store', 'store_id'),
            'address' => array(self::BELONGS_TO, 'Address', 'address_id'),
            'stores' => array(self::HAS_MANY, 'Store', 'manager_staff_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'staff_id' => Yii::t('crud', 'Staff'),
            'first_name' => Yii::t('crud', 'First Name'),
            'last_name' => Yii::t('crud', 'Last Name'),
            'address_id' => Yii::t('crud', 'Address'),
            'picture' => Yii::t('crud', 'Picture'),
            'email' => Yii::t('crud', 'Email'),
            'store_id' => Yii::t('crud', 'Store'),
            'active' => Yii::t('crud', 'Active'),
            'username' => Yii::t('crud', 'Username'),
            'password' => Yii::t('crud', 'Password'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.staff_id', $this->staff_id);
        $criteria->compare('t.first_name', $this->first_name, true);
        $criteria->compare('t.last_name', $this->last_name, true);
        $criteria->compare('t.address_id', $this->address_id);
        $criteria->compare('t.picture', $this->picture, true);
        $criteria->compare('t.email', $this->email, true);
        $criteria->compare('t.store_id', $this->store_id);
        $criteria->compare('t.active', $this->active);
        $criteria->compare('t.username', $this->username, true);
        $criteria->compare('t.password', $this->password, true);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}
