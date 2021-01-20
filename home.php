<?php

$ambil = $conn->query("SELECT * FROM tb_user");
$pengguna = $ambil->num_rows;

$ambil2 = $conn->query("SELECT * FROM tb_pelanggan");
$pelanggan = $ambil2->num_rows;

$ambil3 = $conn->query("SELECT * FROM tb_laundri");
$laundri = $ambil3->num_rows;

$ambil4 = $conn->query("SELECT * FROM tb_transaksi");
$transaksi = $ambil4->num_rows;

?>

<section class="content-header">
    <div class="form-group">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
    </div>
</section>

<!-- Main content -->
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $pengguna ?><sup style="font-size: 20px"> Orang</sup></h3>

                <p>Pengguna</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="?page=pengguna" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $pelanggan ?><sup style="font-size: 20px"> Orang</sup></h3>

                <p>Pelanggan</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="?page=pelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $laundri ?></h3>

                <p>Transaksi Laundry</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="?page=laundry" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= $transaksi ?></h3>

                <p>Pemasuka & Pengeluaran</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="?page=transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>