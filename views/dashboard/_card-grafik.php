<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19/12/2019
 * Time: 02.59
 */

use miloschuman\highcharts\Highcharts;
use app\models\Buku;    
use app\models\Kategori;
use app\models\Penerbit;
use app\models\Penulis;
use app\models\User;

?>

<div class="card card-default">
    <div class="card-header">
        <h2 class="card-title"><b>Grafik</b></h3>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-6 col-md-4">                
                <?=Highcharts::widget([
                    'options' => [
                        'credits' => false,
                        'title' => ['text' => 'Penulis Buku'],
                        'exporting' => ['enabled' => true],
                        'xAxis' => [
                            'categories' => Penulis::getNama(),
                        ],
                        'yAxis' => [
                            'title' => ['text' => 'jumlah buku'],
                        ],
                        'plotOptions' => [
                            'pie' => [
                                'cursor' => 'pointer',
                            ],
                        ],
                        'series' => [
                            [
                                'type' => 'column',
                                'name' => 'Buku',
                                'data' => Penulis::getGrafikList(),
                                'color' =>'purple'   
                            ],
                        ],
                    ],
                ]);?>
            </div>

            <div class="col-6 col-md-4">            
                <?=Highcharts::widget([
                    'options' => [
                        'credits' => false,
                        'title' => ['text' => 'Penerbit Buku'],
                        'exporting' => ['enabled' => true],
                        'xAxis' => [
                            'categories' => Penerbit::getNama(),
                        ],
                        'yAxis' => [
                            'title' => ['text' => 'jumlah buku'],
                        ],
                        'plotOptions' => [
                            'pie' => [
                                'cursor' => 'pointer',
                            ],
                        ],
                        'series' => [
                            [
                                'type' => 'column',
                                'name' => 'Buku',
                                'data' => Penerbit::getGrafikList(),
                                'color' =>'green'   
                            ],
                        ],
                    ],
                ]);?>
            </div>

            <div class="col-6 col-md-4">
                <?=Highcharts::widget([
                    'options' => [
                        'credits' => false,
                        'title' => ['text' => 'Kategori Buku'],
                        'exporting' => ['enabled' => true],
                        'xAxis' => [
                            'categories' => Kategori::getNama(),
                        ],
                        'yAxis' => [
                            'title' => ['text' => 'jumlah buku'],
                        ],
                        'plotOptions' => [
                            'pie' => [
                                'cursor' => 'pointer',
                            ],
                        ],
                        'series' => [
                            [
                                'type' => 'column',
                                'name' => 'Buku',
                                'data' => Kategori::getGrafikList(),
                                'color' =>'red'   
                            ],
                        ],
                    ],
                ]);?>
            </div>   
        </div>
    </div>
</div>
