<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="card card-default">
        <div class="card-header">
            <?= Html::a('Tambah Peminjaman', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Daftar Buku', ['buku/index'], ['class' => 'btn btn-primary']) ?>
        </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    // 'id_buku',
                    [
                        'label' => 'Judul Buku',
                        'attribute' => 'id_buku',
                        'format' => 'raw',
                        'value' => function($data) 
                        {
                            return @$data->buku->nama;
                        }
                    ],
                    // 'id_anggota',
                    [
                        'label' => 'Nama Anggota',
                        'attribute' => 'id_anggota',
                        'format' => 'raw',
                        'value' => function($data) 
                        {
                            return @$data->anggota->nama;
                        }
                    ],
                    'tanggal_pinjam',
                    'tanggal_kembali',
                    //'created_at',
                    //'updated_at',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>
