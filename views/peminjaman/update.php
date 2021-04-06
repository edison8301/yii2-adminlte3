<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */

// $this->title = 'Update Data Peminjaman: ' . $model->id;
$this->title = 'Update Data Peminjaman';
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Detail', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peminjaman-update">
	<div class="card card-default">
		<div class="card-body">

		    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

		    <?= $this->render('_form', [
		        'model' => $model,
		        'buku' => $buku,
		        'anggota' => $anggota
		    ]) ?>
    	</div>
	</div>
</div>
