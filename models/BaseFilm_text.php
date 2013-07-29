<?php

/**
 * This is the model base class for the table "film_text".
 *
 * Columns in table "film_text" available as properties of the model:
 * @property integer $film_id
 * @property string $title
 * @property string $description
 *
 * There are no model relations.
 */
abstract class BaseFilm_text extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'film_text';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('film_id, title', 'required'),
                array('description', 'default', 'setOnEmpty' => true, 'value' => null),
                array('film_id', 'numerical', 'integerOnly' => true),
                array('title', 'length', 'max' => 255),
                array('description', 'safe'),
                array('film_id, title, description', 'safe', 'on' => 'search'),
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
                    'class' => 'gii-template-collection.components.CSaveRelationsBehavior'
                )
            )
        );
    }

    public function relations()
    {
        return array(
        );
    }

    public function attributeLabels()
    {
        return array(
            'film_id' => Yii::t('crud', 'Film'),
            'title' => Yii::t('crud', 'Title'),
            'description' => Yii::t('crud', 'Description'),
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
