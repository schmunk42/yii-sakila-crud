<?php

/**
 * This is the model base class for the table "category".
 *
 * Columns in table "category" available as properties of the model:
 * @property integer $category_id
 * @property string $name
 * @property string $last_update
 *
 * Relations of table "category" available as properties of the model:
 * @property Film[] $films
 */
abstract class BaseCategory extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'category';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('name, last_update', 'required'),
                array('name', 'length', 'max' => 25),
                array('category_id, name, last_update', 'safe', 'on' => 'search'),
            )
        );
    }

    public function getItemLabel()
    {
        return (string) $this->name;
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
            'films' => array(self::MANY_MANY, 'Film', 'film_category(category_id, film_id)'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'category_id' => Yii::t('crud', 'Category'),
            'name' => Yii::t('crud', 'Name'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.category_id', $this->category_id);
        $criteria->compare('t.name', $this->name, true);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}
