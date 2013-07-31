<?php

/**
 * This is the model base class for the table "city".
 *
 * Columns in table "city" available as properties of the model:
 * @property integer $city_id
 * @property string $city
 * @property integer $country_id
 * @property string $last_update
 *
 * Relations of table "city" available as properties of the model:
 * @property Address[] $addresses
 * @property Country $country
 */
abstract class BaseCity extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'city';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('city, country_id, last_update', 'required'),
                array('country_id', 'numerical', 'integerOnly' => true),
                array('city', 'length', 'max' => 50),
                array('city_id, city, country_id, last_update', 'safe', 'on' => 'search'),
            )
        );
    }

    public function getItemLabel()
    {
        return (string) $this->city;
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
            'addresses' => array(self::HAS_MANY, 'Address', 'city_id'),
            'country' => array(self::BELONGS_TO, 'Country', 'country_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'city_id' => Yii::t('crud', 'City'),
            'city' => Yii::t('crud', 'City'),
            'country_id' => Yii::t('crud', 'Country'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.city_id', $this->city_id);
        $criteria->compare('t.city', $this->city, true);
        $criteria->compare('t.country_id', $this->country_id);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}
