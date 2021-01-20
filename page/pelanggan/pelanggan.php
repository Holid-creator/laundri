<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Pelangggan</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="?page=pelanggan&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px;"><i class="glyphicon glyphicon-plus"></i> Tambah Pelanggan</a>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Pelanggan</th>
                                <th>Nama Pelanggan</th>
                                <th>Alamat</th>
                                <th>Telpon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil = $conn->query("SELECT * FROM tb_pelanggan");
                            while ($tampil = $ambil->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $tampil['kode_plg'] ?></td>
                                    <td><?= $tampil['n_plg'] ?></td>
                                    <td><?= $tampil['alamat'] ?></td>
                                    <td><?= $tampil['telpon'] ?></td>
                                    <td>
                                        <a href="?page=pelanggan&aksi=ubah&id=<?= $tampil['kode_plg'] ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya....!!')" href="?page=pelanggan&aksi=hapus&id=<?= $tampil['kode_plg'] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>

                                    </td>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>