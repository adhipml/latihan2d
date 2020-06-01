<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SekolahSdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sekolah Sd';
//$this->params['breadcrumbs'][] = $this->title;
?>



<div class="sekolah-sd-index">
 <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">
            <span class="glyphicon glyphicon-home" ></span>
            <?= Html::encode($this->title) ?>
            <div class="pull-right">

            </div>
          </h3>
        </div>
          <div class="panel-body">



   <!-- <h1><?= Html::encode($this->title) ?></h1>  -->


       <!-- <?= Html::a('Create Sekolah Sd', ['create'], ['class' => 'btn btn-success']) ?>  -->


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama',
            'kelurahan',
            'kepsek',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

          </div>
      </div>
    </div>
 </div>


</div>
