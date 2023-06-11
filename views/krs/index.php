<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use yii\helpers\url;
    use app\models\Krs;
?>
<?= Html::a('Krs Baru', ['krs/create'], ['class' => 'btn btn-primary']) ?>
<?=
    GridView::widget([
        'dataProvider'  => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'id_mahasiswa',
            'id_matakuliah',
            'semester',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Krs $model){
                    return url::toRoute([$action,'id' => $model->id]);
                }
            ],
        ],
    ])
?>