<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Json;
use app\models\Paziente;
use app\helpers\PazienteHelper;

class PazienteController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionView($id = null) {

        $paziente = Paziente::find()
                ->where(['id_paz' => $id])
                ->one();

        return $this->render('view', [
                    'paziente' => $paziente
        ]);
    }

    public function actionIndexData() {

        $request = Yii::$app->request;

        $dataPazienti = PazienteHelper::getIndexData();

        return Json::encode($dataPazienti);
    }

}
