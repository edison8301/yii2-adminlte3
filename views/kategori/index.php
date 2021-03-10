<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="card card-default">
        <div class="card-header">
            <?= Html::a('Tambah Kategori', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    
        <div class="card-body">
            <div class="columns">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => 
                [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    'nama',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'contentOptions' => ['style' => 'width: 100px;']
                    ],
                ],
                ]); 
            ?>
        </div>
    </div>
</div>
