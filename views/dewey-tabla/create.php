<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DeweyTabla $model */

$this->title = 'Create Dewey Tabla';
$this->params['breadcrumbs'][] = ['label' => 'Dewey Tablas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dewey-tabla-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
