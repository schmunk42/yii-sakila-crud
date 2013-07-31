<?php


class PaymentController extends Controller
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
'roles' => array('Sakila.Slim.Payment.*'),
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

    public function actionView($payment_id)
    {
        $model = $this->loadModel($payment_id);
        $this->render('view', array('model' => $model,));
    }

    public function actionCreate()
    {
        $model = new Payment;
        $model->scenario = $this->scenario;

        $this->performAjaxValidation($model, 'payment-form');

        if (isset($_POST['Payment'])) {
            $model->attributes = $_POST['Payment'];

            try {
                if ($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view', 'payment_id' => $model->payment_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('payment_id', $e->getMessage());
            }
        } elseif (isset($_GET['Payment'])) {
            $model->attributes = $_GET['Payment'];
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($payment_id)
    {
        $model = $this->loadModel($payment_id);
        $model->scenario = $this->scenario;

        $this->performAjaxValidation($model, 'payment-form');

        if (isset($_POST['Payment'])) {
            $model->attributes = $_POST['Payment'];


            try {
                if ($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view', 'payment_id' => $model->payment_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('payment_id', $e->getMessage());
            }
        }

        $this->render('update', array('model' => $model,));
    }

    public function actionEditableSaver()
    {
        Yii::import('EditableSaver'); //or you can add import 'ext.editable.*' to config
        $es = new EditableSaver('Payment'); // classname of model to be updated
        $es->update();
    }

    public function actionDelete($payment_id)
    {
        if (Yii::app()->request->isPostRequest) {
            try {
                $this->loadModel($payment_id)->delete();
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
        $dataProvider = new CActiveDataProvider('Payment');
        $this->render('index', array('dataProvider' => $dataProvider,));
    }

    public function actionAdmin()
    {
        $model = new Payment('search');
        $model->unsetAttributes();

        if (isset($_GET['Payment'])) {
            $model->attributes = $_GET['Payment'];
        }

        $this->render('admin', array('model' => $model,));
    }

    public function loadModel($id)
    {
        $model = Payment::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, Yii::t('crud', 'The requested page does not exist.'));
        }
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'payment-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
