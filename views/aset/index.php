<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AsetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Aset';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="aset-index card card-default">

    <div class="card-header">
        <h3 class="card-title">
            <?=  $this->title; ?>        </h3>
    </div>

    <div class="card-body">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        
        <div style="margin-bottom:20px; text-align:right">
            <?= Html::a('<i class="fa fa-plus"></i> Tambah Aset', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
            <?= Html::a('<i class="fa fa-print"></i> Export Excel Aset', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat']) ?>
        </div>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn',
                    'header' => 'No',
                    'headerOptions' => ['style' => 'text-align:center'],
                    'contentOptions' => ['style' => 'text-align:center']
                ],
                [
                    'attribute' => 'id',
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                ],
                [
                    'attribute' => 'kode',
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                ],
                [
                    'attribute' => 'nama',
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                ],
                [
                    'attribute' => 'id_aset_jenis',
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions' => ['style' => 'text-align:center;width:80px']
                ],
            ],
        ]); ?>

    </div>
</div>
