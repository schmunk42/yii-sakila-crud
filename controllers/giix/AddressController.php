<?php

class AddressController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Address'),
		));
	}

	public function actionCreate() {
		$model = new Address;


		if (isset($_POST['Address'])) {
			$model->setAttributes($_POST['Address']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->address_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Address');


		if (isset($_POST['Address'])) {
			$model->setAttributes($_POST['Address']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->address_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Address')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Address');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Address('search');
		$model->unsetAttributes();

		if (isset($_GET['Address']))
			$model->setAttributes($_GET['Address']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}