<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Periksa */

$this->title = 'Update Periksa: ' . $model->id_periksa;
$this->params['breadcrumbs'][] = ['label' => 'Periksas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_periksa, 'url' => ['view', 'id_periksa' => $model->id_periksa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="periksa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
