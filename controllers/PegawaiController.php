<?php

namespace app\controllers;
use app\models\Pegawai;
use yii\data\ActiveDataProvider;

class PegawaiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Pegawai::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
