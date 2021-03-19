<?php

use app\models\Buku;
use app\models\BukuSearch;
use app\components\Session;

$searchModel = new BukuSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

$allBuku = Buku::find()->andWhere('id'
        )->all();

?>

<table class="table table-bordered table-hover datatables">
            <thead>
                <tr>
                    <th style="text-align:center" width="50px">No</th>
                    <th style="text-align:center" width="100px">Nama</th>
                    <th style="text-align:center">Tahun Terbit</th>
                    <th style="text-align:center">Penulis</th>
                    <th style="text-align:center">Penerbit</th>
                    <th style="text-align:center">Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($allBuku as $buku) { ?>
                    <tr>
                        <td style="text-align:center"><?= $i; ?></td>
                        <td style="text-align:center"><?= @$buku->nama; ?></td>
                        <td style="text-align:center"><?= @$buku->tahun_terbit; ?></td>
                        <td style="text-align:center"><?= @$buku->penulis->nama; ?></td>
                        <td style="text-align:center"><?= @$buku->penerbit->nama; ?></td>
                        <td style="text-align:center"><?= @$buku->kategori->nama; ?></td>
                    </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </div>
</div>