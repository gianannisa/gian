<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Periksa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periksa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_periksa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pasien')->textInput() ?>

    <?= $form->field($model, 'id_penyakit')->textInput() ?>

    <?= $form->field($model, 'id_obat')->textInput() ?>

    <?= $form->field($model, 'id_dokter')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
