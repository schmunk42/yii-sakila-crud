<?php

class Film_textController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Film_text'),
		));
	}

	public function actionCreate() {
		$model = new Film_text;


		if (isset($_POST['Film_text'])) {
			$model->setAttributes($_POST['Film_text']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->film_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Film_text');


		if (isset($_POST['Film_text'])) {
			$model->setAttributes($_POST['Film_text']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->film_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Film_text')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Film_text');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Film_text('search');
		$model->unsetAttributes();

		if (isset($_GET['Film_text']))
			$model->setAttributes($_GET['Film_text']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}