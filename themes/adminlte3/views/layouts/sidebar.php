<?php

use app\models\User;
use app\components\Session;
use app\models\UserRole;
use hail812\adminlte3\widgets\Menu;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <img src="<?= Yii::getAlias('@web'); ?>/images/koper.png" alt="User Image" class="brand-image img-circle elevation-3"
             style="opacity: 1.0">
        <span class="brand-text font-weight-dark"></i>Selamat Datang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web'); ?>/images/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <i class="fa fa-circle text-success"></i>
                    <strong><?= Session::getUsername(); ?></strong>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <!-- /.search form -->
            <?php if (Session::isAdmin()) {
                print $this->render('_menu-admin');
            } ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
