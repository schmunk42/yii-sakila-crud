<?php

/**
 * This is the model base class for the table "store".
 *
 * Columns in table "store" available as properties of the model:
 * @property integer $store_id
 * @property integer $manager_staff_id
 * @property integer $address_id
 * @property string $last_update
 *
 * Relations of table "store" available as properties of the model:
 * @property Customer[] $customers
 * @property Inventory[] $inventories
 * @property Staff[] $staffs
 * @property Staff $managerStaff
 * @property Address $address
 */
abstract class BaseStore extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'store';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('manager_staff_id, address_id, last_update', 'required'),
                array('manager_staff_id, address_id', 'numerical', 'integerOnly' => true),
                array('store_id, manager_staff_id, address_id, last_update', 'safe', 'on' => 'search'),
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
                    'class' => 'gii-template-collection.components.CSaveRelationsBehavior'
                )
            )
        );
    }

    public function relations()
    {
        return array(
            'customers' => array(self::HAS_MANY, 'Customer', 'store_id'),
            'inventories' => array(self::HAS_MANY, 'Inventory', 'store_id'),
            'staffs' => array(self::HAS_MANY, 'Staff', 'store_id'),
            'managerStaff' => array(self::BELONGS_TO, 'Staff', 'manager_staff_id'),
            'address' => array(self::BELONGS_TO, 'Address', 'address_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'store_id' => Yii::t('crud', 'Store'),
            'manager_staff_id' => Yii::t('crud', 'Manager Staff'),
            'address_id' => Yii::t('crud', 'Address'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.store_id', $this->store_id);
        $criteria->compare('t.manager_staff_id', $this->manager_staff_id);
        $criteria->compare('t.address_id', $this->address_id);
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
