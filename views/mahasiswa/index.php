<?php 
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use app\models\Mahasiswa018;
    use yii\helpers\url;

?>
<div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('/assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Mahasiswa</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>mahasiswa</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
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