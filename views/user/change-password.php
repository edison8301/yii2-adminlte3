<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\LoginForm */

$this->title = 'Ganti Password';

$this->params['breadcrumbs'][] = $this->title;

?>

<?php $form = ActiveForm::begin([
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'wrapper' => 'col-sm-4',
            'error' => '',
            'hint' => '',
        ],
    ]
]); ?>

    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Form Ganti Password</h3>
        </div>
        <div class="card-body">

            <?= $form->field($model, 'password_lama')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password_baru')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password_baru_konfirmasi')->passwordInput(['maxlength' => true])->label('Password Baru (Konfirmasi)') ?>

            <?= Html::hiddenInput('referrer',$referrer); ?>

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-3">
                    <?= Html::submitButton('<i class="fa fa-check"></i> Ganti Password', ['class' => 'btn btn-success btn-flat', 'name' => 'register-button']) ?>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>
