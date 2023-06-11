<?php
namespace app\controllers;
use app\models\Krs;
use yii\data\ActiveDataProvider;

class KrsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Krs::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

        public function actionTambah()
    {
        $Krs = new Krs;
        // $Krs->id = '4';
        $Krs->id_mahasiswa = '80';
        $Krs->id_matakuliah = '70';
        $Krs->semester = '20';
        $Krs->status = 'Do sekaliami';


        
        if ($Krs->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Krs->getErrors());
            die();
        }

    }
    public function actionUpdate($id)
    {
        $Krs = Krs::findOne($id);
        $Krs->status = 'tidak aktif';
        if ($Krs->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Krs->getErrors());
            die();
        }

    }

    public function actionDelete($id)
    {
        $Krs = Krs::findOne($id);
        if ($Krs->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Krs->getErrors());
            die();
}



}

}