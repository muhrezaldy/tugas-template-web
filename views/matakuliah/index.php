<?php
    use yii\grid\GridView
?>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'kode_mk',
            'nama_mk'
           
        ]
    ])

?>
