<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SekolahSd */

$this->title = 'Create Sekolah Sd';
$this->params['breadcrumbs'][] = ['label' => 'Sekolah Sds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sekolah-sd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
