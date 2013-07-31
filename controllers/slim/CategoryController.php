<?php


class CategoryController extends Controller
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
'roles' => array('Sakila.Slim.Category.*'),
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

    public function actionView($category_id)
    {
        $model = $this->loadModel($category_id);
        $this->render('view', array('model' => $model,));
    }

    public function actionCreate()
    {
        $model = new Category;
        $model->scenario = $this->scenario;

        $this->performAjaxValidation($model, 'category-form');

        if (isset($_POST['Category'])) {
            $model->attributes = $_POST['Category'];

            if(isset($_POST['Category']['Film']))
                $model->setRelationRecords('films', $_POST['Category']['Film']);
            try {
                if ($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view', 'category_id' => $model->category_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('category_id', $e->getMessage());
            }
        } elseif (isset($_GET['Category'])) {
            $model->attributes = $_GET['Category'];
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($category_id)
    {
        $model = $this->loadModel($category_id);
        $model->scenario = $this->scenario;

        $this->performAjaxValidation($model, 'category-form');

        if (isset($_POST['Category'])) {
            $model->attributes = $_POST['Category'];

            if(isset($_POST['Category']['Film']))
                $model->setRelationRecords('films', $_POST['Category']['Film']);
else
$model->setRelationRecords('films',array());

            try {
                if ($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view', 'category_id' => $model->category_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('category_id', $e->getMessage());
            }
        }

        $this->render('update', array('model' => $model,));
    }

    public function actionEditableSaver()
    {
        Yii::import('EditableSaver'); //or you can add import 'ext.editable.*' to config
        $es = new EditableSaver('Category'); // classname of model to be updated
        $es->update();
    }

    public function actionDelete($category_id)
    {
        if (Yii::app()->request->isPostRequest) {
            try {
                $this->loadModel($category_id)->delete();
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
        $dataProvider = new CActiveDataProvider('Category');
        $this->render('index', array('dataProvider' => $dataProvider,));
    }

    public function actionAdmin()
    {
        $model = new Category('search');
        $model->unsetAttributes();

        if (isset($_GET['Category'])) {
            $model->attributes = $_GET['Category'];
        }

        $this->render('admin', array('model' => $model,));
    }

    public function loadModel($id)
    {
        $model = Category::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, Yii::t('crud', 'The requested page does not exist.'));
        }
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'category-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
