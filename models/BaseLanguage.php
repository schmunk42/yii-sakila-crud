<?php

/**
 * This is the model base class for the table "language".
 *
 * Columns in table "language" available as properties of the model:
 * @property integer $language_id
 * @property string $name
 * @property string $last_update
 *
 * Relations of table "language" available as properties of the model:
 * @property Film[] $films
 * @property Film[] $films1
 */
abstract class BaseLanguage extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'language';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('name, last_update', 'required'),
                array('name', 'length', 'max' => 20),
                array('language_id, name, last_update', 'safe', 'on' => 'search'),
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
            'films' => array(self::HAS_MANY, 'Film', 'language_id'),
            'films1' => array(self::HAS_MANY, 'Film', 'original_language_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'language_id' => Yii::t('crud', 'Language'),
            'name' => Yii::t('crud', 'Name'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.language_id', $this->language_id);
        $criteria->compare('t.name', $this->name, true);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}
