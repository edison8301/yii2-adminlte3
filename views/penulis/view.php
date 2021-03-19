<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penulis */

$this->title = $model->nama;
$this->title = 'Detail Penulis';
$this->params['breadcrumbs'][] = ['label' => 'Penulis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penulis-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="card card-default">
        <div class="card-header">
            <?= Html::a('Back', ['buku/index', 'id' => $model->id], ['class' => 'btn btn-warning']) 
            ?>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], 
                [
                'class' => 'btn btn-danger',
                'data' => 
                [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
                ]) 
            ?>
        </div>

        <div class="card-body">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => 
                [
                    // 'id',
                    'nama',
                    'alamat:ntext',
                    'telepon',
                    'email:email',
                    // 'created_at',
                    // 'updated_at',
                ],
                ]) 
            ?>
        </div>
    </div>
</div>
