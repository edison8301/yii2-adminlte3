<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index card card-default">

    <div class="card-header">
        <h3  class="card-title">Daftar User</h3>
    </div>

    <div class="card-body">
        <div style="margin-bottom:20px">
            <?= Html::a('<i class="fa fa-plus"></i> Tambah User', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
            <?= Html::a('<i class="fa fa-print"></i> Export Excel User', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat']) ?>
        </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No',
                'headerOptions' => ['style' => 'text-align:center; width: 50px;'],
                'contentOptions' => ['style' => 'text-align:center']
            ],
            [
                'attribute' => 'username',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;'],
            ],
            [
                'label' => '',
                'format' => 'raw',
                'value' => function($data) {
                    return Html::a('<i class="glyphicon glyphicon-lock">', [
                        'set-password',
                        'id'=>$data->id,
                    ], [
                        'data-toggle' => 'tooltip',
                        'title' => 'Set Password'
                    ]);
                },
                'headerOptions' => ['style' => 'width:50px'],
                'contentOptions' => ['style' => 'text-align:center']
            ],
            [
                'class' => 'app\components\ToggleActionColumn',
                'headerOptions' => ['style' => 'width:80px'],
                'contentOptions' => ['style' => 'text-align:center']
            ],
        ],
    ]); ?>
    </div>
</div>
