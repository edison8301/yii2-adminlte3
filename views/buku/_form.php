<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use dosamigos\tinymce\TinyMce;


/* @var $this yii\web\View */
/* @var $model app\models\Buku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'masukkan judul'])->label('Judul Buku') ?>

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

    <?= $form->field($model, 'id_penulis')->dropDownList($penulis,['prompt'=>'-pilih penulis-'])->label('Nama Penulis') ?>

    <?= $form->field($model, 'id_penerbit')->dropDownList($penerbit,['prompt'=>'-pilih penerbit-'])->label('Nama Penerbit') ?>

    <?= $form->field($model, 'id_kategori')->dropDownList($kategori,['prompt'=>'-pilih kategori-'])->label('Nama Kategori') ?>

    <!-- <?= $form->field($model, 'sinopsis')->textArea(['rows' => '3']) ?> -->

    <?= $form->field($model, 'sinopsis')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <!-- <?= $form->field($model, 'sampul')->fileInput() ?> -->
    <?= $form->field($model, 'sampul')->widget(FileInput::classname(), [
        'data' => $model->sampul,
        'pluginOptions' => [
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' =>  'Select Photo'
        ] 
    ]); ?>

    <!-- <?= $form->field($model, 'berkas')->textInput(['maxlength' => true]) ?> -->
    <?= $form->field($model, 'berkas')->widget(FileInput::classname(), [
        'data' => $model->berkas,
    ]); ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::a('Cancel', ['buku/index'], ['class' => 'btn btn-danger']) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
