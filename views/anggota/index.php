<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnggotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Anggota';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="card card-default">
        <div class="card-header">
        <?= Html::a('Tambah Anggota', ['create'], ['class' => 'btn btn-success']) ?>
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
                'nama',
                'alamat',
                'telepon',
                // 'email:email',
                //'status_aktif',
                //'created_at',
                //'updated_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
            ]); ?>
        </div>
    <div>
</div>
