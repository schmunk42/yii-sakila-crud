<?php


class RentalController extends Controller
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
'roles' => array('Sakila.Slim.Rental.*'),
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

    public function actionView($rental_id)
    {
        $model = $this->loadModel($rental_id);
        $this->render('view', array('model' => $model,));
    }

    public function actionCreate()
    {
        $model = new Rental;
        $model->scenario = $this->scenario;

        $this->performAjaxValidation($model, 'rental-form');

        if (isset($_POST['Rental'])) {
            $model->attributes = $_POST['Rental'];

            try {
                if ($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view', 'rental_id' => $model->rental_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('rental_id', $e->getMessage());
            }
        } elseif (isset($_GET['Rental'])) {
            $model->attributes = $_GET['Rental'];
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($rental_id)
    {
        $model = $this->loadModel($rental_id);
        $model->scenario = $this->scenario;

        $this->performAjaxValidation($model, 'rental-form');

        if (isset($_POST['Rental'])) {
            $model->attributes = $_POST['Rental'];


            try {
                if ($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view', 'rental_id' => $model->rental_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('rental_id', $e->getMessage());
            }
        }

        $this->render('update', array('model' => $model,));
    }

    public function actionEditableSaver()
    {
        Yii::import('EditableSaver'); //or you can add import 'ext.editable.*' to config
        $es = new EditableSaver('Rental'); // classname of model to be updated
        $es->update();
    }

    public function actionDelete($rental_id)
    {
        if (Yii::app()->request->isPostRequest) {
            try {
                $this->loadModel($rental_id)->delete();
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
        $dataProvider = new CActiveDataProvider('Rental');
        $this->render('index', array('dataProvider' => $dataProvider,));
    }

    public function actionAdmin()
    {
        $model = new Rental('search');
        $model->unsetAttributes();

        if (isset($_GET['Rental'])) {
            $model->attributes = $_GET['Rental'];
        }

        $this->render('admin', array('model' => $model,));
    }

    public function loadModel($id)
    {
        $model = Rental::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, Yii::t('crud', 'The requested page does not exist.'));
        }
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'rental-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
