<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Pengguna</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="?page=pengguna&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px;"><i class="glyphicon glyphicon-plus"></i> Tambah Pengguna</a>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Password</th>
                                <th>level</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil = $conn->query("SELECT * FROM tb_user");
                            while ($tampil = $ambil->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $tampil['username'] ?></td>
                                    <td><?= $tampil['nama'] ?></td>
                                    <td><?= $tampil['password'] ?></td>
                                    <td><?= $tampil['level'] ?></td>
                                    <td><img src="dist/img/<?= $tampil['foto'] ?>" width="100px"></td>
                                    <td>
                                        <a href="?page=pengguna&aksi=ubah&id=<?= $tampil['id'] ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya....!!')" href="?page=pengguna&aksi=hapus&id=<?= $tampil['id'] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>

                                    </td>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>