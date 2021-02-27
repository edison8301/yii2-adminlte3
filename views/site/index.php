<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use app\models\Pelayanan;
use app\models\PelayananStatus;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KuesionerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sistem Informasi Pelayanan Kerumahtanggaan';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<p>Pelayanan Diterima</p>

				<h3>8</h3>
			</div>
			<div class="icon">
				<i class="fa fa-check-square-o"></i>
			</div>
			<a href="#" class="small-box-footer">Permohonan dan Monitoring Layanan</a>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<p>Pelayanan Ditolak</p>
				
				<h3>8</h3>
			</div>
			<div class="icon">
				<i class="fa fa-remove"></i>
			</div>
			<a href="#" class="small-box-footer">Permohonan dan Monitoring Layanan</a>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<p>Menunggu Diproses</p>
				
				<h3>8</h3>
			</div>
			<div class="icon">
				<i class="fa fa-refresh"></i>
			</div>
			<a href="#" class="small-box-footer">Permohonan dan Monitoring Layanan</a>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-purple">
			<div class="inner">
				<p>Dalam Proses</p>
				
				<h3>8</h3>
			</div>
			<div class="icon">
				<i class="fa fa-clock-o"></i>
			</div>
			<a href="#" class="small-box-footer">Permohonan dan Monitoring Layanan</a>
		</div>
	</div>
</div>



