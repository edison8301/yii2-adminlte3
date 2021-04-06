<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */

// $this->title = 'Update Anggota: ' . $model->id;
$this->title = 'Update Data Anggota';
$this->params['breadcrumbs'][] = ['label' => 'Anggota', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anggota-update">
	<div class="card card-default">
		
		<div class="card-body">
		    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
	    </div>
    </div>
</div>
