<?php

class PaymentController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Payment'),
		));
	}

	public function actionCreate() {
		$model = new Payment;


		if (isset($_POST['Payment'])) {
			$model->setAttributes($_POST['Payment']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->payment_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Payment');


		if (isset($_POST['Payment'])) {
			$model->setAttributes($_POST['Payment']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->payment_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Payment')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Payment');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Payment('search');
		$model->unsetAttributes();

		if (isset($_GET['Payment']))
			$model->setAttributes($_GET['Payment']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}