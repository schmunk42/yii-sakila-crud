<?php


class CountryController extends Controller
{
    #public $layout='//layouts/column2';

    public $defaultAction = "admin";
    public $scenario = "crud";

public function filters()
{
return array(
'accessControl',
);
}

public function accessRules()
{
return array(
array(
'allow',
'actions' => array('create', 'editableSaver', 'update', 'delete', 'admin', 'view'),
'roles' => array('Sakila.Slim.Country.*'),
),
array(
'deny',
'users' => array('*'),
),
);
}

    public function beforeAction($action)
    {
        parent::beforeAction($action);
        if ($this->module !== null) {
            $this->breadcrumbs[$this->module->Id] = array('/' . $this->module->Id);
        }
        return true;
    }

    public function actionView($country_id)
    {
        $model = $this->loadModel($country_id);
        $this->render('view', array('model' => $model,));
    }

    public function actionCreate()
    {
        $model = new Country;
        $model->scenario = $this->scenario;

        $this->performAjaxValidation($model, 'country-form');

        if (isset($_POST['Country'])) {
            $model->attributes = $_POST['Country'];

            try {
                if ($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view', 'country_id' => $model->country_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('country_id', $e->getMessage());
            }
        } elseif (isset($_GET['Country'])) {
            $model->attributes = $_GET['Country'];
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($country_id)
    {
        $model = $this->loadModel($country_id);
        $model->scenario = $this->scenario;

        $this->performAjaxValidation($model, 'country-form');

        if (isset($_POST['Country'])) {
            $model->attributes = $_POST['Country'];


            try {
                if ($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view', 'country_id' => $model->country_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('country_id', $e->getMessage());
            }
        }

        $this->render('update', array('model' => $model,));
    }

    public function actionEditableSaver()
    {
        Yii::import('EditableSaver'); //or you can add import 'ext.editable.*' to config
        $es = new EditableSaver('Country'); // classname of model to be updated
        $es->update();
    }

    public function actionDelete($country_id)
    {
        if (Yii::app()->request->isPostRequest) {
            try {
                $this->loadModel($country_id)->delete();
            } catch (Exception $e) {
                throw new CHttpException(500, $e->getMessage());
            }

            if (!isset($_GET['ajax'])) {
                if (isset($_GET['returnUrl'])) {
                    $this->redirect($_GET['returnUrl']);
                } else {
                    $this->redirect(array('admin'));
                }
            }
        } else {
            throw new CHttpException(400, Yii::t('crud', 'Invalid request. Please do not repeat this request again.'));
        }
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Country');
        $this->render('index', array('dataProvider' => $dataProvider,));
    }

    public function actionAdmin()
    {
        $model = new Country('search');
        $model->unsetAttributes();

        if (isset($_GET['Country'])) {
            $model->attributes = $_GET['Country'];
        }

        $this->render('admin', array('model' => $model,));
    }

    public function loadModel($id)
    {
        $model = Country::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, Yii::t('crud', 'The requested page does not exist.'));
        }
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'country-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
