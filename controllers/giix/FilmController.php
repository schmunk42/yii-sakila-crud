<?php

class FilmController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Film'),
		));
	}

	public function actionCreate() {
		$model = new Film;


		if (isset($_POST['Film'])) {
			$model->setAttributes($_POST['Film']);
			$relatedData = array(
				'actors' => $_POST['Film']['actors'] === '' ? null : $_POST['Film']['actors'],
				'categories' => $_POST['Film']['categories'] === '' ? null : $_POST['Film']['categories'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->film_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Film');


		if (isset($_POST['Film'])) {
			$model->setAttributes($_POST['Film']);
			$relatedData = array(
				'actors' => $_POST['Film']['actors'] === '' ? null : $_POST['Film']['actors'],
				'categories' => $_POST['Film']['categories'] === '' ? null : $_POST['Film']['categories'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->film_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Film')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Film');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Film('search');
		$model->unsetAttributes();

		if (isset($_GET['Film']))
			$model->setAttributes($_GET['Film']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}