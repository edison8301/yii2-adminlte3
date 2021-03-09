<?php

use app\components\Config;
use app\models\UserRole;
use app\modules\absensi\models\Pengaduan;
use hail812\adminlte3\widgets\Menu;

/* @var $this \yii\web\View */

?>

<?= Menu::widget([
    'items' => [
        ['label' => 'MENU UTAMA', 'header' => true],
        ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['/dashboard/index']],	
        ['label' => 'Daftar Buku', 'icon' => 'book', 'url' => ['/buku/index']],
        ['label' => 'Daftar Penulis', 'icon' => 'pen', 'url' => ['/penulis/index']],
        ['label' => 'Daftar Penerbit', 'icon' => 'briefcase', 'url' => ['/penerbit/index']],
        ['label' => 'Daftar Kategori', 'icon' => 'folder-open', 'url' => ['/kategori/index']],
        ['label' => 'User', 'icon' => 'user', 'items' => [
            ['label' => 'Admin', 'iconStyle'=>'far', 'icon' => 'circle', 'url' => ['/user/index', 'id_user_role' => UserRole::ADMIN]],
        ]],
        ['label' => 'Ganti Password', 'icon' => 'lock', 'url' => ['/user/change-password']],
        ['label' => 'Logout', 'iconStyle' => 'fas', 'icon'=>'sign-out-alt', 'url' => ['/site/logout'],'template'=>'<a class="nav-link {active}" data-method="post" href="{url}" {target}>{icon} {label}</a>'],
    ],
]);

?>
