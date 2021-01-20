<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- /.box-header -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Transaksi</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="?page=transaksi&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px;"><i class="glyphicon glyphicon-plus"></i> Tambah Transaksi Laundry</a>

                    <a target="blank" href="page/transaksi/cetak.php" class="btn btn-default" style="margin-bottom: 10px;"><i class="fa fa-print"></i> Cetak</a>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Transaksi</th>
                                <th>Keterangan</th>
                                <th>Catatan</th>
                                <th>Kasir</th>
                                <th>Pemasukan</th>
                                <th>Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil = $conn->query("SELECT * FROM tb_transaksi, tb_user WHERE tb_transaksi . kode_user = tb_user . id");
                            while ($tampil = $ambil->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td style="text-align: center;"><?= $no++; ?></td>
                                    <td><?= date('d M Y', strtotime($tampil['tgl_transaksi'])); ?></td>
                                    <td><?= $tampil['keterangan']; ?></td>
                                    <td><?= $tampil['catatan']; ?></td>
                                    <td><?= $tampil['nama']; ?></td>
                                    <td style="text-align: right;">Rp. <?= number_format($tampil['pemasukan']); ?></td>
                                    <td style="text-align: right;">Rp. <?= number_format($tampil['pengeluaran']); ?></td>
                                </tr>
                            <?php

                                $masuk = $masuk + $tampil['pemasukan'];
                                $keluar = $keluar + $tampil['pengeluaran'];
                                $total = $masuk + $keluar;
                            } ?>
                        </tbody>

                        <tr>
                            <th colspan="5" style="text-align: center;">Total Pemasukan dan Pengeluaran</th>
                            <th>Rp. <?= number_format($masuk) ?></th>
                            <th>Rp. <?= number_format($keluar) ?></th>
                        </tr>
                        <tr>
                            <th colspan="5" style="text-align: center; font-size: 18px;">Saldo Akhir</th>
                            <th colspan="2" style="text-align: center; font-size: 18px;">Rp. <?= number_format($total) ?></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>