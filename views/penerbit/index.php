<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenerbitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Penerbit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerbit-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="card card-default">
        <div class="card-header">
        <?= Html::a('Tambah Penerbit', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="card-body">

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => 
                [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    'nama',
                    'alamat:ntext',
                    'telepon',
                    'email:email',
                    //'created_at',
                    //'updated_at',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
                ]); 
            ?>
        </div>
        </div>
</div>
