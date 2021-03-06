<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */

// $this->title = $model->id;
$this->title = 'Detail Peminjaman';
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="peminjaman-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="card card-default">
        <div class="card-header">
            <?= Html::a('Back', ['peminjaman/index', 'id' => $model->id], ['class' => 'btn btn-warning']) 
            ?>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </div>

        <div class="card-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
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
                    // 'created_at',
                    // 'updated_at',
                ],
            ]) ?>
        </div>
    </div>
</div>
