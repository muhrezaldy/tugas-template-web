<?php

namespace app\controllers;
use app\models\Mahasiswa018;
use app\widgets\alert;
use yii\data\ActiveDataProvider;
use Yii;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query =  Mahasiswa018::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider
        ]);
    }
    
    public function actionTambah()
    {
        $mahasiswa018 = new Mahasiswa018;
        $randomNumber = mt_rand(100, 999);
        $mahasiswa018 -> nim018 = '60200121019'. $randomNumber;
        $mahasiswa018 -> nama018 = 'reza';
        $mahasiswa018 -> kelas018 = 'B';
        $mahasiswa018 -> status018 = 'non aktif';
        //mahasiswa018 -> save();
        if ($mahasiswa018->save()){
            Yii::$app->session->setFlash('success', 'Data Ditambah');
            return $this->redirect(['index']);
        }
    }
    public function actionUpdate($id)
    {
        $mahasiswa = Mahasiswa018::findOne($id);
        if ($mahasiswa !== null) {
            $mahasiswa->nama018 = 'dodit';
            $mahasiswa->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
            
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getErrors());
            die();
        }
    }
    public function actionDelete($id)
    {
        $mahasiswa = Mahasiswa018::findOne($id);
        if ($mahasiswa->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getErrors());
            die();
        }
    }
    public function actionView($id018)
    {
        $mahasiswa018 = Mahasiswa018::findOne(['id018' => $id018]); 
        return $this->redirect('view', ['model' => $mahasiswa018]);
    }


}
