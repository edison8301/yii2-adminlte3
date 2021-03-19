<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenulisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Penulis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="card card-default">
        <div class="card-header">
        <?= Html::a('Tambah Penulis', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Daftar Buku', ['buku/index'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="card-body">

            <?= GridView::widget
            ([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => 
                [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    'nama',
                    'alamat:ntext',
                    ['label' => 'Jumlah Buku','value' => function($data)
                    {
                        return $data -> getCountBuku();
                    },
                        'headerOptions' => ['style' => 'width: 150px; text-align: center'],
                    ],
                    // 'telepon',
                    // 'email:email',
                    //'created_at',
                    //'updated_at',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'contentOptions' => ['style' => 'width: 100px; text-align: center']
                    ],
                ],
            ]); 
            ?>
        </div>
    </div>
</div>
