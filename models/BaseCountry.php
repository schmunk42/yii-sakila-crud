<?php

/**
 * This is the model base class for the table "country".
 *
 * Columns in table "country" available as properties of the model:
 * @property integer $country_id
 * @property string $country
 * @property string $last_update
 *
 * Relations of table "country" available as properties of the model:
 * @property City[] $cities
 */
abstract class BaseCountry extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'country';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('country, last_update', 'required'),
                array('country', 'length', 'max' => 50),
                array('country_id, country, last_update', 'safe', 'on' => 'search'),
            )
        );
    }

    public function getItemLabel()
    {
        return (string) $this->country;
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
            'cities' => array(self::HAS_MANY, 'City', 'country_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'country_id' => Yii::t('crud', 'Country'),
            'country' => Yii::t('crud', 'Country'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.country_id', $this->country_id);
        $criteria->compare('t.country', $this->country, true);
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
