<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="card card-default">
        <div class="card-header">
            <?= Html::a('Tambah Buku', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Cetak PDF', ['pdf'], ['class' => 'btn btn-success', 'target' => '_blank']) ?>
            <?= Html::a('Export Excel', ['excel'], ['class' => 'btn btn-success', 'target' => '_blank']) ?>
        </div>

        <div class="card-body">
            <?= GridView::widget
                ([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    'nama',
                    // 'tahun_terbit',
                    [
                        'label' => 'Penulis',
                        'attribute' => 'id_penulis',
                        'format' => 'raw',
                        'value' => function($data) 
                        {
                            return @$data->penulis->nama;
                        }
                    ],
                    [
                        'label' => 'Penerbit',
                        'attribute' => 'id_penerbit',
                        'format' => 'raw',
                        'value' => function($data) 
                        {
                            return @$data->penerbit->nama;
                        }
                    ],
                    [
                        'label' => 'Kategori',
                        'attribute' => 'id_kategori',
                        'format' => 'raw',
                        'value' => function($data) 
                        {
                            return @$data->kategori->nama;
                        }
                    ],
                    //'sinopsis:ntext',
                    //'sampul',
                    //'berkas',
                    //'created_at',
                    //'updated_at',

                    ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);     
            ?>
        </div>
    </div>
</div>
