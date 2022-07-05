<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rahasia */

$this->title = 'Create Rahasia';
$this->params['breadcrumbs'][] = ['label' => 'Rahasias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rahasia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
