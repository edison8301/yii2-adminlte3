<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */

$this->title = 'Tambah Buku';
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-create">
	<div class="card card-default">
		<div class="card-body">

	    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

	    	<?= $this->render('_form', 
	    	[
	        'model' => $model,
	        'penulis' => $penulis,
	        'penerbit' => $penerbit,
	        'kategori' => $kategori
	    	]) 
	    	?>
		</div>
	</div>
</div>
