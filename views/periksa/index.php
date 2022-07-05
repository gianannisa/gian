<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeriksaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Periksas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periksa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Periksa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_periksa',
            'keluhan',
            'diagnosa',
            'tgl_periksa',
            'id_pasien',
            'pasien.nama_pasien',
            'pasien.umur',
            'pasien.jenis_kelamin',
            'id_penyakit',
            'penyakit.nama_penyakit',
            'id_obat',
            'obat.nama_obat',
            'obat.keterangan',
            'id_dokter',
            'dokter.nama_dokter',
            'dokter.spesialis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action,  $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_periksa' => $model->id_periksa]);
                 }
            ],
        ],
    ]); ?>


</div>
