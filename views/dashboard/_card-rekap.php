<?php

use yii\helpers\Url;
use app\models\Buku;
use app\models\Penulis;
use app\models\Penerbit;
use app\models\Kategori;

?>


<div class="card card-default">
    <div class="card-header">
        <h2 class="card-title"><b>Rekap</b></h3>
    </div>
    <div class="card-body">
        <div class="row">

            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <p>Jumlah Buku</p>

                        <h3>
                            <?= Yii::$app->formatter->asInteger(Buku::getCount()); ?>
                        </h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book" aria-hidden="true"></i>
                    </div>
                    <a href="<?=Url::to(['buku/index']);?>"class="small-box-footer">Detail 
                        <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <p>Jumlah Penulis</p>

                        <h3>
                            <?= Yii::$app->formatter->asInteger(Penulis::getCount()); ?>
                        </h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                    </div>
                    <a href="<?=Url::to(['penulis/index']);?>"class="small-box-footer">Detail 
                        <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <p>Jumlah Penerbit</p>

                        <h3>
                            <?= Yii::$app->formatter->asInteger(Penerbit::getCount()); ?>
                        </h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <a href="<?=Url::to(['penerbit/index']);?>"class="small-box-footer">Detail 
                        <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <p>Jumlah Kategori</p>

                        <h3>
                            <?= Yii::$app->formatter->asInteger(Kategori::getCount()); ?>
                        </h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-folder-open"></i>
                    </div>
                    <a href="<?=Url::to(['kategori/index']);?>"class="small-box-footer">Detail 
                        <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
