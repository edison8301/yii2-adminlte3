<?php

/* @var $this yii\web\View */
/* @var $model app\models\Aset */
/* @var $referrer string */

$this->title = 'Tambah Aset';
$this->params['breadcrumbs'][] = ['label' => 'Asets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="aset-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
