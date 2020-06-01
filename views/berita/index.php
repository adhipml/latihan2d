<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BeritaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Beritas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berita-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Berita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
[ // link slug pada title
    'attribute' => 'title',
    'format' => 'raw',
    'value' => function ($model, $key, $index) {
        return Html::a($model->title,  'berita/'.$model->slug);
    },

],
            'slug',
            'detail:ntext',
            //'date',
            //'published',
            //'created_by',
            //'updated_by',
            //'created_at',
            //'updated_at',

            //['class' => 'yii\grid\ActionColumn'],
             ['class' => 'yii\grid\ActionColumn',
                 'template'=>'{view} {update} {delete}',
                   'buttons'=>[
                        'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 'berita/'.$model->slug, ['title' => Yii::t('yii', 'View'),]);
                        }
                       ],
             ],
        ],
    ]); ?>


</div>
