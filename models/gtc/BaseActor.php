<?php

/**
 * This is the model base class for the table "actor".
 *
 * Columns in table "actor" available as properties of the model:
 * @property integer $actor_id
 * @property string $first_name
 * @property string $last_name
 * @property string $last_update
 *
 * Relations of table "actor" available as properties of the model:
 * @property Film[] $films
 */
abstract class BaseActor extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'actor';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('first_name, last_name, last_update', 'required'),
                array('first_name, last_name', 'length', 'max' => 45),
                array('actor_id, first_name, last_name, last_update', 'safe', 'on' => 'search'),
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
            'films' => array(self::MANY_MANY, 'Film', 'film_actor(actor_id, film_id)'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'actor_id' => Yii::t('crud', 'Actor'),
            'first_name' => Yii::t('crud', 'First Name'),
            'last_name' => Yii::t('crud', 'Last Name'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.actor_id', $this->actor_id);
        $criteria->compare('t.first_name', $this->first_name, true);
        $criteria->compare('t.last_name', $this->last_name, true);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}
