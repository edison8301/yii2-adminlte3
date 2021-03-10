<?php

use yii\helpers\Html;
use yii\helpers\Url;




$this->title = "Halaman Utama";

?>

<?= $this->render('_card-rekap'); ?>


<div class="row">
	<div class="col-sm-6">
		<?= $this->render('_card-grafik'); ?>
	</div>
    <div class="col-sm-6">
        <?= $this->render('_card-grafik'); ?>
    </div>
</div>

