<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DeweyTabla $model */

$this->title = 'Update Dewey Tabla: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Dewey Tablas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dewey-tabla-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
