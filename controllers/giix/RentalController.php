<?php

class RentalController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Rental'),
		));
	}

	public function actionCreate() {
		$model = new Rental;


		if (isset($_POST['Rental'])) {
			$model->setAttributes($_POST['Rental']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->rental_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Rental');


		if (isset($_POST['Rental'])) {
			$model->setAttributes($_POST['Rental']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->rental_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Rental')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Rental');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Rental('search');
		$model->unsetAttributes();

		if (isset($_GET['Rental']))
			$model->setAttributes($_GET['Rental']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}