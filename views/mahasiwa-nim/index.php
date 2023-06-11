<?php
use app\models\MahasiwaNim;
use yii\helpers\HTML;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\view $this */
/** @var yii\data\ActionsDataProvider $dataprovider */

?>
<div class="mahasiswa-nim-index">
    <h1><?=Html::encode($this->title) ?></h1>

    <p>
        <?=Html::button('Mahasiswa Baru', ['class' =>'btn btn-primary']) ?>
    </p>


    <?=
        GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'nim',
            'nama',
            'kelas',
            'jurusan',
            'profilnim.foto_profile',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MahasiwaNim $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
           
        ],
    ]);

?>

</div>