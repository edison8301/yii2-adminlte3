<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */

// $this->title = $model->nama;
$this->title = 'Detail Buku';
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="buku-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="card card-default">
        <div class="card-header">
            <?= Html::a('Back', ['buku/index', 'id' => $model->id], ['class' => 'btn btn-warning']) 
            ?>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) 
            ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => 
                [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],]) 
            ?>
        </div>
    
        <div class="card-body">
            <?= DetailView::widget
                ([
                    'model' => $model,
                    'attributes' => 
                    [
                    // 'id',
                    'nama',
                    'tahun_terbit',
                    [
                        'attribute' => 'id_penulis',
                        'label' => 'Nama Penulis',
                        'format' => 'raw',
                        'value' => function($data) 
                        {
                            return @$data->penulis->nama;
                        }
                    ],
                    [
                        'attribute' => 'id_penerbit',
                        'label' => 'Nama Penerbit',
                        'format' => 'raw',
                        'value' => function($data) 
                        {
                            return @$data->penerbit->nama;
                        }
                    ],
                    [
                        'attribute' => 'id_kategori',
                        'label' => 'Jenis Kategori',
                        'format' => 'raw',
                        'value' => function($data) 
                        {
                            return @$data->kategori->nama;
                        }
                    ],
                    [
                        'attribute'=>'sinopsis',
                        'format'=>'raw',
                        'value'=>$model->sinopsis
                    ],
                    [
                        'attribute' => 'sampul',
                        'format' => 'raw',
                        'value' => function ($model) {
                            if ($model->sampul != '') {
                            return Html::img('@web/images/upload/sampul/' . $model->sampul, ['class' => 'img-responsive', 'style' => 'height:200px']);
                            } else { 
                                return '<div align="center"><h1>Tidak Ada Sampul</h1></div>';
                        }
                    },
                    ],
                    [
                        'attribute' => 'berkas',
                        'format' => 'raw',
                        'value' => $model->getLinkIconBerkas()
                    ], 
                    // 'created_at',
                    // 'updated_at',
                    ],
                ]) 
            ?>
        </div>  
    </div>
</div>
