<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penerbit */

$this->title = 'Tambah Penerbit';
$this->params['breadcrumbs'][] = ['label' => 'Penerbit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerbit-create">
	<div class="card card-default">
		<div class="card-body">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

		    <?= $this->render('_form', 
		    	[
		        'model' => $model,
		    	]) 
		    ?>
		</div>
	</div>
</div>
