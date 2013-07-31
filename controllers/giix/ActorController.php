<?php

class ActorController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Actor'),
		));
	}

	public function actionCreate() {
		$model = new Actor;


		if (isset($_POST['Actor'])) {
			$model->setAttributes($_POST['Actor']);
			$relatedData = array(
				'films' => $_POST['Actor']['films'] === '' ? null : $_POST['Actor']['films'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->actor_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Actor');


		if (isset($_POST['Actor'])) {
			$model->setAttributes($_POST['Actor']);
			$relatedData = array(
				'films' => $_POST['Actor']['films'] === '' ? null : $_POST['Actor']['films'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->actor_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Actor')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Actor');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Actor('search');
		$model->unsetAttributes();

		if (isset($_GET['Actor']))
			$model->setAttributes($_GET['Actor']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}