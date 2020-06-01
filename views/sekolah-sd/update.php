<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SekolahSd */

$this->title = 'Update Sekolah Sd: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sekolah Sds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sekolah-sd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
