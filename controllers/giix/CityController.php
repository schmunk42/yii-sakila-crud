<?php

class CityController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'City'),
		));
	}

	public function actionCreate() {
		$model = new City;


		if (isset($_POST['City'])) {
			$model->setAttributes($_POST['City']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->city_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'City');


		if (isset($_POST['City'])) {
			$model->setAttributes($_POST['City']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->city_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'City')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('City');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new City('search');
		$model->unsetAttributes();

		if (isset($_GET['City']))
			$model->setAttributes($_GET['City']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}