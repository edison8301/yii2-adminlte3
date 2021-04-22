<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Buku;

/* @var $this yii\web\View */
/* @var $model app\models\Kategori */

// $this->title = $model->id;
$this->title = 'Detail Kategori '. $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kategori-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="card card-default">
        <div class="card-header">
            <?= Html::a('Back', ['kategori/index', 'id' => $model->id], ['class' => 'btn btn-warning']) 
            ?>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
                ]) 
            ?>
        </div>
    
        <div class="card-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    // 'id',
                    'nama',
                    ['label' => 'Jumlah Buku','value' => function($data)
                        {
                            return $data -> getCountBuku();
                        },
                    ],
                    // 'created_at',
                    // 'updated_at',
                ],
            ]) ?>
        </div>

        <div class="card-body">
            <h5>Daftar Buku Kategori <?= $model->nama; ?></h5>
            <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Tahun Terbit</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>&nbsp;</th>
            </tr>
            <?php $no=1; foreach ($model->listBuku() as $buku): ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $buku->nama;  ?></td>
                <td><?= $buku->tahun_terbit; ?></td>
                <td><?= @$buku->penulis->nama ?></td>
                <td><?= @$buku->penerbit->nama ?></td>
                <td>
                    <!-- <?= Html::a("Lihat", ["buku/view", "id" => $buku->id ])?> -->
                    <?= Html::a("<i class='fa fa-pencil-alt'></i>", ["buku/update", "id" => $buku->id])?>
                    <?= Html::a("<i class='fa fa-trash'></i>", ["buku/delete", "id" => $buku->id], 
                        [
                        'data' => [
                            'method' => 'post',
                            'confirm' => 'Apakah anda yakin akan menghapus nya?'
                        ]
                    ])?>
                </td>
            </tr>
            <?php $no++; endforeach ?>
            </table>         
        </div>
    </div>
</div>
