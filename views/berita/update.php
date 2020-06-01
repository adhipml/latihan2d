<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Berita */

$this->title = 'Update Berita: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="berita-update">

    <h1></h1>


 <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">
            <span class="glyphicon glyphicon-home"  style="font-size:16px; color:blue"></span>
            <?= Html::encode($this->title) ?>
            <div class="pull-right">
            
            </div>
          </h3>
        </div>
          <div class="panel-body">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

          </div>
      </div>
    </div>
 </div>
