<?php

class StaffController extends Controller
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
        if (!isset($_GET['id']) && isset($_GET['staff_id'])) {
            $model=Staff::model()->find('staff_id = :staff_id', array(
            ':staff_id' => $_GET['staff_id']));
            if ($model !== null) {
                $_GET['id'] = $model->staff_id;
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
        $model = new Staff;

                $this->performAjaxValidation($model, 'staff-form');
    
        if(isset($_POST['Staff'])) {
            $model->attributes = $_POST['Staff'];

            try {
                if($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view','id'=>$model->id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('staff_id', $e->getMessage());
            }
        } elseif(isset($_GET['Staff'])) {
                $model->attributes = $_GET['Staff'];
        }

        $this->render('create',array( 'model'=>$model));
    }


    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

                $this->performAjaxValidation($model, 'staff-form');
        
        if(isset($_POST['Staff']))
        {
            $model->attributes = $_POST['Staff'];


            try {
                if($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view','id'=>$model->id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('staff_id', $e->getMessage());
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
        $dataProvider=new CActiveDataProvider('Staff');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model=new Staff('search');
        $model->unsetAttributes();

        if(isset($_GET['Staff']))
            $model->attributes = $_GET['Staff'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    public function loadModel($id)
    {
        $model=Staff::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,Yii::t('app', 'The requested page does not exist.'));
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='staff-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
