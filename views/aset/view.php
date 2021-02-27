<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aset */

$this->title = "Detail Aset";
$this->params['breadcrumbs'][] = ['label' => 'Aset', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aset-view card card-primary">

    <div class="card-header">
        <h3 class="card-title">Detail Aset</h3>
    </div>

    <div class="card-body">

        <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
                        [
                'attribute' => 'id',
                'format' => 'raw',
                'value' => $model->id,
                ],
                            [
                'attribute' => 'kode',
                'format' => 'raw',
                'value' => $model->kode,
                ],
                            [
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => $model->nama,
                ],
                            [
                'attribute' => 'id_aset_jenis',
                'format' => 'raw',
                'value' => $model->id_aset_jenis,
                ],
                    ],
        ]) ?>

    </div>

    <div class="card-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Aset', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Aset', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
