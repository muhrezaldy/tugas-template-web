<?php

namespace app\controllers;
use app\models\MahasiwaNim;
use yii\data\ActiveDataProvider;

class MahasiwaNimController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = MahasiwaNim::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
