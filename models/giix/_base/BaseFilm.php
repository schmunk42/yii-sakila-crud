<?php

/**
 * This is the model base class for the table "film".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Film".
 *
 * Columns in table "film" available as properties of the model,
 * followed by relations of table "film" available as properties of the model.
 *
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
 * @property Language $language
 * @property Language $originalLanguage
 * @property Actor[] $actors
 * @property Category[] $categories
 * @property Inventory[] $inventories
 */
abstract class BaseFilm extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'film';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Film|Films', $n);
	}

	public static function representingColumn() {
		return 'title';
	}

	public function rules() {
		return array(
			array('title, language_id, last_update', 'required'),
			array('language_id, original_language_id, rental_duration, length', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('release_year, rental_rate', 'length', 'max'=>4),
			array('replacement_cost, rating', 'length', 'max'=>5),
			array('description, special_features', 'safe'),
			array('description, release_year, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features', 'default', 'setOnEmpty' => true, 'value' => null),
			array('film_id, title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features, last_update', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'language' => array(self::BELONGS_TO, 'Language', 'language_id'),
			'originalLanguage' => array(self::BELONGS_TO, 'Language', 'original_language_id'),
			'actors' => array(self::MANY_MANY, 'Actor', 'film_actor(film_id, actor_id)'),
			'categories' => array(self::MANY_MANY, 'Category', 'film_category(film_id, category_id)'),
			'inventories' => array(self::HAS_MANY, 'Inventory', 'film_id'),
		);
	}

	public function pivotModels() {
		return array(
			'actors' => 'FilmActor',
			'categories' => 'FilmCategory',
		);
	}

	public function attributeLabels() {
		return array(
			'film_id' => Yii::t('app', 'Film'),
			'title' => Yii::t('app', 'Title'),
			'description' => Yii::t('app', 'Description'),
			'release_year' => Yii::t('app', 'Release Year'),
			'language_id' => null,
			'original_language_id' => null,
			'rental_duration' => Yii::t('app', 'Rental Duration'),
			'rental_rate' => Yii::t('app', 'Rental Rate'),
			'length' => Yii::t('app', 'Length'),
			'replacement_cost' => Yii::t('app', 'Replacement Cost'),
			'rating' => Yii::t('app', 'Rating'),
			'special_features' => Yii::t('app', 'Special Features'),
			'last_update' => Yii::t('app', 'Last Update'),
			'language' => null,
			'originalLanguage' => null,
			'actors' => null,
			'categories' => null,
			'inventories' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('film_id', $this->film_id);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('release_year', $this->release_year, true);
		$criteria->compare('language_id', $this->language_id);
		$criteria->compare('original_language_id', $this->original_language_id);
		$criteria->compare('rental_duration', $this->rental_duration);
		$criteria->compare('rental_rate', $this->rental_rate, true);
		$criteria->compare('length', $this->length);
		$criteria->compare('replacement_cost', $this->replacement_cost, true);
		$criteria->compare('rating', $this->rating, true);
		$criteria->compare('special_features', $this->special_features, true);
		$criteria->compare('last_update', $this->last_update, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}