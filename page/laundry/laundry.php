<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- /.box-header -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Transaksi Laundri</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="?page=laundry&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px;"><i class="glyphicon glyphicon-plus"></i> Tambah Laundry</a>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama Pelanggan</th>
                                <th>Tanggal Terima</th>
                                <th>Tanggal Selesai</th>
                                <th>Jumlah</th>
                                <th>Catatan</th>
                                <th>Status</th>
                                <th>Kasir</th>
                                <th style="width: 101px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil = $conn->query("SELECT * FROM tb_laundri, tb_pelanggan, tb_user WHERE tb_laundri . id_plg = tb_pelanggan . kode_plg AND tb_laundri . kode_user = tb_user . id");
                            while ($tampil = $ambil->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td style="text-align: center;"><?= $no++; ?></td>
                                    <td><?= $tampil['n_plg']; ?></td>
                                    <td><?= date('d M Y', strtotime($tampil['tgl_terima'])); ?></td>
                                    <td><?= date('d M Y', strtotime($tampil['tgl_selesai'])); ?></td>
                                    <td style="text-align: right;">Rp. <?= number_format($tampil['nominal']); ?></td>
                                    <td><?= $tampil['catatan']; ?></td>
                                    <td><?= $tampil['status']; ?></td>
                                    <td><?= $tampil['nama']; ?></td>
                                    <td>
                                        <a href="?page=laundry&aksi=ubah&id=<?= $tampil['id_laundri'] ?>" class="btn btn-warning" title="Edit"><i class="fa fa-edit"></i> </a>

                                        <?php

                                        if ($tampil['status'] == 'Belum Lunas') {

                                        ?>

                                            <a href="?page=laundry&aksi=lunas&id=<?= $tampil['id_laundri'] ?>" class="btn btn-success" title="Lunaskan"><i class="fa fa-paypal"></i></a>

                                        <?php } ?>

                                        <a target="blank" href="page/laundry/cetak.php?id=<?= $tampil['id_laundri'] ?>" class="btn btn-info" title="Print"><i class="fa fa-print"></i></a>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>