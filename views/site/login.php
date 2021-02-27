<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use app\components\Config;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'enableClientValidation' => false
]); ?>

<div class="login-box">
    <br>
    <div class="login-logo" style="margin-bottom: 30px">
        <?= Html::img(Yii::$app->request->baseUrl . '/images/logo-login.png', ['style' => 'height:100px']) ?>
        <p style="color: white; font-size: 24px; margin: 5px 0">
            <b>Sistem Informasi<br/>Himpunan Alumni Miftahul Huda<br/>(HAMIDA)</b>
        </p>
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Masukkan Username Dan Password</p>

        <?= $form->field($model, 'username', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => "{input}"
        ])->textInput(['autofocus' => true, 'placeholder' => 'Username'])->label(false) ?>

        <?= $form->field($model, 'password', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => "{input}"
        ])->passwordInput(['placeholder' => 'Password'])->label(false) ?>

        <div class="row">
            <div class="col-xs-12" style="padding-left: 10px">
                <?= Html::submitButton('<i class="fa fa-lock"></i> Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>
