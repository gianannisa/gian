<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Periksa */

$this->title = $model->id_periksa;
$this->params['breadcrumbs'][] = ['label' => 'Periksas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="periksa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_periksa' => $model->id_periksa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_periksa' => $model->id_periksa], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_periksa',
            'keluhan',
            'diagnosa',
            'tgl_periksa',
            'id_pasien',
            'id_penyakit',
            'id_obat',
            'id_dokter',
        ],
    ]) ?>

</div>
