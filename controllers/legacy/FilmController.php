<?php

class FilmController extends Controller
{
    public $layout='//layouts/column2';

    public function filters()
    {
        return array(
            'accessControl', 
        );
    }    

    public function accessRules()
    {
        return array(
            array('allow',  
                'actions'=>array('index','view'),
                'users'=>array('*'),
            ),
            array('allow', 
                'actions'=>array('create','update'),
                'users'=>array('@'),
            ),
            array('allow', 
                'actions'=>array('admin','delete'),
                'users'=>array('admin'),
            ),
            array('deny',  
                'users'=>array('*'),
            ),
        );
    }
    
    public function beforeAction($action){
        parent::beforeAction($action);
        // map identifcationColumn to id
        if (!isset($_GET['id']) && isset($_GET['film_id'])) {
            $model=Film::model()->find('film_id = :film_id', array(
            ':film_id' => $_GET['film_id']));
            if ($model !== null) {
                $_GET['id'] = $model->film_id;
            } else {
                throw new CHttpException(400);
            }
        }
        if ($this->module !== null) {
            $this->breadcrumbs[$this->module->Id] = array('/'.$this->module->Id);
        }
        return true;
    }
    
    public function actionView($id)
    {
        $model = $this->loadModel($id);
        $this->render('view',array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $model = new Film;

                $this->performAjaxValidation($model, 'film-form');
    
        if(isset($_POST['Film'])) {
            $model->attributes = $_POST['Film'];

            if(isset($_POST['Film']['Actor']))
                $model->setRelationRecords('actors', $_POST['Film']['Actor']);
            if(isset($_POST['Film']['Category']))
                $model->setRelationRecords('categories', $_POST['Film']['Category']);
            try {
                if($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view','id'=>$model->id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('film_id', $e->getMessage());
            }
        } elseif(isset($_GET['Film'])) {
                $model->attributes = $_GET['Film'];
        }

        $this->render('create',array( 'model'=>$model));
    }


    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

                $this->performAjaxValidation($model, 'film-form');
        
        if(isset($_POST['Film']))
        {
            $model->attributes = $_POST['Film'];

            if(isset($_POST['Film']['Actor']))
                $model->setRelationRecords('actors', $_POST['Film']['Actor']);
else
$model->setRelationRecords('actors',array());
            if(isset($_POST['Film']['Category']))
                $model->setRelationRecords('categories', $_POST['Film']['Category']);
else
$model->setRelationRecords('categories',array());

            try {
                if($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view','id'=>$model->id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('film_id', $e->getMessage());
            }    
        }

        $this->render('update',array(
                    'model'=>$model,
                    ));
    }

    public function actionDelete($id)
    {
        if(Yii::app()->request->isPostRequest)
        {
            try {
                $this->loadModel($id)->delete();
            } catch (Exception $e) {
                throw new CHttpException(500,$e->getMessage());
            }

            if(!isset($_GET['ajax']))
            {
                    $this->redirect(array('admin'));
            }
        }
        else
            throw new CHttpException(400,
                    Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
    }

    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Film');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model=new Film('search');
        $model->unsetAttributes();

        if(isset($_GET['Film']))
            $model->attributes = $_GET['Film'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    public function loadModel($id)
    {
        $model=Film::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,Yii::t('app', 'The requested page does not exist.'));
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='film-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
