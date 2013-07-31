<?php

/**
 * This is the model base class for the table "inventory".
 *
 * Columns in table "inventory" available as properties of the model:
 * @property integer $inventory_id
 * @property integer $film_id
 * @property integer $store_id
 * @property string $last_update
 *
 * Relations of table "inventory" available as properties of the model:
 * @property Store $store
 * @property Film $film
 * @property Rental[] $rentals
 */
abstract class BaseInventory extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'inventory';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('film_id, store_id, last_update', 'required'),
                array('film_id, store_id', 'numerical', 'integerOnly' => true),
                array('inventory_id, film_id, store_id, last_update', 'safe', 'on' => 'search'),
            )
        );
    }

    public function getItemLabel()
    {
        return (string) $this->last_update;
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
            'store' => array(self::BELONGS_TO, 'Store', 'store_id'),
            'film' => array(self::BELONGS_TO, 'Film', 'film_id'),
            'rentals' => array(self::HAS_MANY, 'Rental', 'inventory_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'inventory_id' => Yii::t('crud', 'Inventory'),
            'film_id' => Yii::t('crud', 'Film'),
            'store_id' => Yii::t('crud', 'Store'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.inventory_id', $this->inventory_id);
        $criteria->compare('t.film_id', $this->film_id);
        $criteria->compare('t.store_id', $this->store_id);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}
