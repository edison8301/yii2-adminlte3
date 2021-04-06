<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id_buku')->textInput() ?> -->
    <?= $form->field($model, 'id_buku')->dropDownList($buku,['prompt'=>'-pilih buku-'])->label('Judul Buku') ?>

    <!-- <?= $form->field($model, 'id_anggota')->textInput() ?> -->
    <?= $form->field($model, 'id_anggota')->dropDownList($anggota,['prompt'=>'-pilih anggota-'])->label('Nama Anggota') ?>

    <!-- <?= $form->field($model, 'tanggal_pinjam')->textInput() ?> -->
    <?= $form->field($model, 'tanggal_pinjam')->widget(DatePicker::className(), [
            'removeButton' => false,
            'options' => ['placeholder' => 'pilih tanggal'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>

    <!-- <?= $form->field($model, 'tanggal_kembali')->textInput() ?> -->
    <?= $form->field($model, 'tanggal_kembali')->widget(DatePicker::className(), [
            'removeButton' => false,
            'options' => ['placeholder' => 'pilih tanggal'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::a('Cancel', ['peminjaman/index'], ['class' => 'btn btn-danger']) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
