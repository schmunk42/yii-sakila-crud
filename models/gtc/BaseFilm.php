<?php

/**
 * This is the model base class for the table "film".
 *
 * Columns in table "film" available as properties of the model:
 * @property integer $film_id
 * @property string $title
 * @property string $description
 * @property string $release_year
 * @property integer $language_id
 * @property integer $original_language_id
 * @property integer $rental_duration
 * @property string $rental_rate
 * @property integer $length
 * @property string $replacement_cost
 * @property string $rating
 * @property string $special_features
 * @property string $last_update
 *
 * Relations of table "film" available as properties of the model:
 * @property Language $language
 * @property Language $originalLanguage
 * @property Actor[] $actors
 * @property Category[] $categories
 * @property Inventory[] $inventories
 */
abstract class BaseFilm extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'film';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('title, language_id, last_update', 'required'),
                array('description, release_year, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features', 'default', 'setOnEmpty' => true, 'value' => null),
                array('language_id, original_language_id, rental_duration, length', 'numerical', 'integerOnly' => true),
                array('title', 'length', 'max' => 255),
                array('release_year, rental_rate', 'length', 'max' => 4),
                array('replacement_cost, rating', 'length', 'max' => 5),
                array('description, special_features', 'safe'),
                array('film_id, title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features, last_update', 'safe', 'on' => 'search'),
            )
        );
    }

    public function getItemLabel()
    {
        return (string) $this->title;
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
            'language' => array(self::BELONGS_TO, 'Language', 'language_id'),
            'originalLanguage' => array(self::BELONGS_TO, 'Language', 'original_language_id'),
            'actors' => array(self::MANY_MANY, 'Actor', 'film_actor(film_id, actor_id)'),
            'categories' => array(self::MANY_MANY, 'Category', 'film_category(film_id, category_id)'),
            'inventories' => array(self::HAS_MANY, 'Inventory', 'film_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'film_id' => Yii::t('crud', 'Film'),
            'title' => Yii::t('crud', 'Title'),
            'description' => Yii::t('crud', 'Description'),
            'release_year' => Yii::t('crud', 'Release Year'),
            'language_id' => Yii::t('crud', 'Language'),
            'original_language_id' => Yii::t('crud', 'Original Language'),
            'rental_duration' => Yii::t('crud', 'Rental Duration'),
            'rental_rate' => Yii::t('crud', 'Rental Rate'),
            'length' => Yii::t('crud', 'Length'),
            'replacement_cost' => Yii::t('crud', 'Replacement Cost'),
            'rating' => Yii::t('crud', 'Rating'),
            'special_features' => Yii::t('crud', 'Special Features'),
            'last_update' => Yii::t('crud', 'Last Update'),
        );
    }

    public function search($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.film_id', $this->film_id);
        $criteria->compare('t.title', $this->title, true);
        $criteria->compare('t.description', $this->description, true);
        $criteria->compare('t.release_year', $this->release_year, true);
        $criteria->compare('t.language_id', $this->language_id);
        $criteria->compare('t.original_language_id', $this->original_language_id);
        $criteria->compare('t.rental_duration', $this->rental_duration);
        $criteria->compare('t.rental_rate', $this->rental_rate, true);
        $criteria->compare('t.length', $this->length);
        $criteria->compare('t.replacement_cost', $this->replacement_cost, true);
        $criteria->compare('t.rating', $this->rating, true);
        $criteria->compare('t.special_features', $this->special_features, true);
        $criteria->compare('t.last_update', $this->last_update, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}
