<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19/12/2019
 * Time: 02.59
 */

use miloschuman\highcharts\Highcharts;

?>

<div class="card card-default">
    <div class="card-header with-border">
        <h3 class="card-title">Grafik</h3>
    </div>
    <div class="card-body">

        <?php echo Highcharts::widget([
            'options' => [
                'title' => ['text' => 'Fruit Consumption'],
                'xAxis' => [
                    'categories' => ['Apples', 'Bananas', 'Oranges']
                ],
                'yAxis' => [
                    'title' => ['text' => 'Fruit eaten']
                ],
                'series' => [
                    ['name' => 'Jane', 'data' => [1, 0, 4]],
                    ['name' => 'John', 'data' => [5, 7, 3]]
                ]
            ]
        ]); ?>
    </div>
</div>
