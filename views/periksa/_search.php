<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeriksaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periksa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_periksa') ?>

    <?= $form->field($model, 'keluhan') ?>

    <?= $form->field($model, 'diagnosa') ?>

    <?= $form->field($model, 'tgl_periksa') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?php // echo $form->field($model, 'id_penyakit') ?>

    <?php // echo $form->field($model, 'id_obat') ?>

    <?php // echo $form->field($model, 'id_dokter') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
