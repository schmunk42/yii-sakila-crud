<?php

class CategoryController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Category'),
		));
	}

	public function actionCreate() {
		$model = new Category;


		if (isset($_POST['Category'])) {
			$model->setAttributes($_POST['Category']);
			$relatedData = array(
				'films' => $_POST['Category']['films'] === '' ? null : $_POST['Category']['films'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->category_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Category');


		if (isset($_POST['Category'])) {
			$model->setAttributes($_POST['Category']);
			$relatedData = array(
				'films' => $_POST['Category']['films'] === '' ? null : $_POST['Category']['films'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->category_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Category')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Category');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Category('search');
		$model->unsetAttributes();

		if (isset($_GET['Category']))
			$model->setAttributes($_GET['Category']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}