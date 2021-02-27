<?php

/* @var $this yii\web\View */
/* @var $model app\models\Aset */
/* @var $referrer string */

$this->title = 'Sunting Aset';
$this->params['breadcrumbs'][] = ['label' => 'Asets', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Sunting';

?>
<div class="aset-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
