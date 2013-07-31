<?php

class StaffController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Staff'),
		));
	}

	public function actionCreate() {
		$model = new Staff;


		if (isset($_POST['Staff'])) {
			$model->setAttributes($_POST['Staff']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->staff_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Staff');


		if (isset($_POST['Staff'])) {
			$model->setAttributes($_POST['Staff']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->staff_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Staff')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Staff');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Staff('search');
		$model->unsetAttributes();

		if (isset($_GET['Staff']))
			$model->setAttributes($_GET['Staff']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}