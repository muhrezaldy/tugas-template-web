<?php
use app\models\Pegawai;
use yii\helpers\HTML;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\view $this */
/** @var yii\data\ActionsDataProvider $dataprovider */

?>
<div class="pegawai-index">
    <h1><?=Html::encode($this->title) ?></h1>

    <p>
        <?=Html::button('pegawai', ['class' =>'btn btn-primary']) ?>
    </p>


    <?=
        GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nip',
            'id_jurusan',
            'nama_pegawai',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pegawai $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
           
        ],
    ]);

?>

</div>