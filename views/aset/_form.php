<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aset */
/* @var $form yii\widgets\ActiveForm */
/* @var $referrer string */

?>

<?php $form = ActiveForm::begin([
    'layout' => 'horizontal',
    'enableAjaxValidation' => false,
    'enableClientValidation' => false,
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'wrapper' => 'col-sm-4',
            'error' => '',
            'hint' => '',
        ],
    ]
]); ?>

<div class="aset-form card card-primary">

    <div class="card-header">
        <h3 class="card-title">Form Aset</h3>
    </div>
	<div class="card-body">

        <?= $form->errorSummary($model) ?>

        <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'id_aset_jenis')->textInput() ?>

        <?= Html::hiddenInput('referrer', $referrer) ?>

	</div>
    <div class="card-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Simpan', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

</div>

<?php ActiveForm::end(); ?>
