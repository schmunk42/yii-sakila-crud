<?php


class StaffController extends Controller
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
'roles' => array('Sakila.Slim.Staff.*'),
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

    public function actionView($staff_id)
    {
        $model = $this->loadModel($staff_id);
        $this->render('view', array('model' => $model,));
    }

    public function actionCreate()
    {
        $model = new Staff;
        $model->scenario = $this->scenario;

        $this->performAjaxValidation($model, 'staff-form');

        if (isset($_POST['Staff'])) {
            $model->attributes = $_POST['Staff'];

            try {
                if ($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view', 'staff_id' => $model->staff_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('staff_id', $e->getMessage());
            }
        } elseif (isset($_GET['Staff'])) {
            $model->attributes = $_GET['Staff'];
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($staff_id)
    {
        $model = $this->loadModel($staff_id);
        $model->scenario = $this->scenario;

        $this->performAjaxValidation($model, 'staff-form');

        if (isset($_POST['Staff'])) {
            $model->attributes = $_POST['Staff'];


            try {
                if ($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view', 'staff_id' => $model->staff_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('staff_id', $e->getMessage());
            }
        }

        $this->render('update', array('model' => $model,));
    }

    public function actionEditableSaver()
    {
        Yii::import('EditableSaver'); //or you can add import 'ext.editable.*' to config
        $es = new EditableSaver('Staff'); // classname of model to be updated
        $es->update();
    }

    public function actionDelete($staff_id)
    {
        if (Yii::app()->request->isPostRequest) {
            try {
                $this->loadModel($staff_id)->delete();
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
        $dataProvider = new CActiveDataProvider('Staff');
        $this->render('index', array('dataProvider' => $dataProvider,));
    }

    public function actionAdmin()
    {
        $model = new Staff('search');
        $model->unsetAttributes();

        if (isset($_GET['Staff'])) {
            $model->attributes = $_GET['Staff'];
        }

        $this->render('admin', array('model' => $model,));
    }

    public function loadModel($id)
    {
        $model = Staff::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, Yii::t('crud', 'The requested page does not exist.'));
        }
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'staff-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
