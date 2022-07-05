<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Periksa */

$this->title = 'Create Periksa';
$this->params['breadcrumbs'][] = ['label' => 'Periksas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periksa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
