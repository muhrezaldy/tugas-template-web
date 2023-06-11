<?php 
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use app\models\Mahasiswa018;
    use yii\helpers\url;

?>
<?= Html::a('Mahasiswa Baru', ['mahasiswa/create'], ['class' => 'btn btn-primary']) ?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id018',
            'nim018',
            'nama018',
            'kelas018',
            'status018',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa018 $model) {
                    return Url::toRoute([$action, 'id' => $model->id018]);
                }
            
            ],
        ],
    ]);
?>