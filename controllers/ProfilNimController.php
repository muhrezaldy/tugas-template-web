<?php

namespace app\controllers;
use app\models\ProfilNim;
use yii\data\ActiveDataProvider;

class ProfilNimController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = ProfilNim::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}

