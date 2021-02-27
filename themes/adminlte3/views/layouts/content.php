<?php
/* @var $content string */

use kartik\alert\Alert;
use yii\bootstrap4\Breadcrumbs;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <?php
                        if (!is_null($this->title)) {
                            echo \yii\helpers\Html::encode($this->title);
                        } else {
                            echo \yii\helpers\Inflector::camelize($this->context->id);
                        }
                        ?>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <?php
                    echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'options' => [
                            'class' => 'float-sm-right'
                        ]
                    ]);
                    ?>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <?php foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
            echo Alert::widget([
                'type' => $key,
                //'title' => 'Well done!',
                'icon' => 'fas fa-ok-circle',
                'body' => $message,
                'showSeparator' => true,
                'delay' => 3000
            ]);
        } ?>
        <?= $content ?><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>