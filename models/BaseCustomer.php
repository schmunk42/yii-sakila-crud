<?php

/**
 * This is the model base class for the table "customer".
 *
 * Columns in table "customer" available as properties of the model:
 * @property integer $customer_id
 * @property integer $store_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property integer $address_id
 * @property integer $active
 * @property string $create_date
 * @property string $last_update
 *
 * Relations of table "customer" available as properties of the model:
 * @property Address $address
 * @property Store $store
 * @property Payment[] $payments
 * @property Rental[] $rentals
 */
abstract class BaseCustomer extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'customer';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('store_id, first_name, last_name, address_id, create_date, last_update', 'required'),
                array('email, active', 'default', 'setOnEmpty' => true, 'value' => null),
                array('store_id, address_id, active', 'numerical', 'integerOnly' => true),
                array('first_name, last_name', 'length', 'max' => 45),
                array('email', 'length', 'max' => 50),
                array('customer_id, store_id, first_name, last_name, email, address_id, active, create_date, last_update', 'safe', 'on' => 'search'),
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
                    'class' => 'gii-template-collection.components.CSaveRelationsBehavior'
                )
            )
        );
    }

    public function relations()
    {
        return array(
            'address' => array(self::BELONGS_TO, 'Address', 'address_id'),
            'store' => array(self::BELONGS_TO, 'Store', 'store_id'),
            'payments' => array(self::HAS_MANY, 'Payment', 'customer_id'),
            'rentals' => array(self::HAS_MANY, 'Rental', 'customer_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'customer_id' => Yii::t('crud', 'Customer'),
            'store_id' => Yii::t('crud', 'Store'),
            'first_name' => Yii::t('crud', 'First Name'),
            'last_name' => Yii::t('crud', 'Last Name'),
            'email' => Yii::t('crud', 'Email'),
            'address_id' => Yii::t('crud', 'Address'),
            'active' => Yii::t('crud', 'Active'),
            'create_date' => Yii::t('crud', 'Create Date'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.customer_id', $this->customer_id);
        $criteria->compare('t.store_id', $this->store_id);
        $criteria->compare('t.first_name', $this->first_name, true);
        $criteria->compare('t.last_name', $this->last_name, true);
        $criteria->compare('t.email', $this->email, true);
        $criteria->compare('t.address_id', $this->address_id);
        $criteria->compare('t.active', $this->active);
        $criteria->compare('t.create_date', $this->create_date, true);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns a model used to populate a filterable, searchable
     * and sortable CGridView with the records found by a model relation.
     *
     * Usage:
     * $relatedSearchModel = $model->getRelatedSearchModel('relationName');
     *
     * Then, when invoking CGridView:
     *    ...
     *        'dataProvider' => $relatedSearchModel->search(),
     *        'filter' => $relatedSearchModel,
     *    ...
     * @returns CActiveRecord
     */
    public function getRelatedSearchModel($name)
    {

        $md = $this->getMetaData();
        if (!isset($md->relations[$name])) {
            throw new CDbException(Yii::t('yii', '{class} does not have relation "{name}".', array('{class}' => get_class($this), '{name}' => $name)));
        }

        $relation = $md->relations[$name];
        if (!($relation instanceof CHasManyRelation)) {
            throw new CException("Currently works with HAS_MANY relations only");
        }

        $className = $relation->className;
        $related = new $className('search');
        $related->unsetAttributes();
        $related->{$relation->foreignKey} = $this->primaryKey;
        if (isset($_GET[$className])) {
            $related->attributes = $_GET[$className];
        }
        return $related;
    }

}
