<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penulis */

$this->title = 'Tambah Penulis';
$this->params['breadcrumbs'][] = ['label' => 'Penulis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-create">
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
