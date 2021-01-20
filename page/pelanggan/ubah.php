<?php

$kode = $_GET['id'];
$ambil = $conn->query("SELECT * FROM tb_pelanggan WHERE kode_plg = '$kode'");
$tampil = $ambil->fetch_assoc();

?>

<!-- general form elements -->
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Ubah Data Pelanggan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Pelanggan</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="k_plg" value="<?= $tampil['kode_plg'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="n_plg" value="<?= $tampil['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Telepon</label>
                    <input type="text" class="form-control" name="telp" value="<?= $tampil['telpon'] ?>">
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat"><?= $tampil['alamat'] ?></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="simpan"><i class="glyphicon glyphicon-save"></i> Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php

if (isset($_POST['simpan'])) {

    $nama = $_POST['n_plg'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $insert = $conn->query("UPDATE tb_pelanggan SET nama = '$nama', alamat = '$alamat', telpon = '$telp' WHERE kode_plg = '$kode'");

    if ($insert) {
?>

        <script>
            alert('Pelanggan Berhasil DiUbah');
            window.location.href = "?page=pelanggan";
        </script>


<?php
    }
}


?>