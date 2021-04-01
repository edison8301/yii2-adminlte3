<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Buku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'masukkan nama']) ?>

    <!-- <?= $form->field($model, 'tahun_terbit')->textInput(['maxlength' => true]) ?> -->
    <?= $form->field($model, 'tahun_terbit')->widget(DatePicker::className(), [
            'removeButton' => false,
            'options' => ['placeholder' => 'pilih tahun terbit'],
            'pluginOptions' => [
                'minViewMode'=>2,
                'autoclose'=>true,
                'format' => 'yyyy'
            ]
    ]) ?>

    <?= $form->field($model, 'id_penulis')->dropDownList($penulis,['prompt'=>'-pilih kategori-'])->label('Nama Penulis') ?>

    <?= $form->field($model, 'id_penerbit')->dropDownList($penerbit,['prompt'=>'-pilih penerbit-'])->label('Nama Penerbit') ?>

    <?= $form->field($model, 'id_kategori')->dropDownList($kategori,['prompt'=>'-pilih kategori-'])->label('Nama Kategori') ?>

    <?= $form->field($model, 'sinopsis')->textArea(['rows' => '3']) ?>

    <?= $form->field($model, 'sampul')->fileInput() ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::a('Cancel', ['buku/index'], ['class' => 'btn btn-danger']) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
