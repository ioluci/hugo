<?php

namespace app\controllers;

class RicevutaController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionView() {
        return $this->render('view');
    }

}
