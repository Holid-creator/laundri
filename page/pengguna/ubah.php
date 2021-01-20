<?php

$kode = $_GET['id'];
$ambil = $conn->query("SELECT * FROM tb_user WHERE id = '$kode'");
$tampil = $ambil->fetch_assoc();

$username = $tampil['username'];
$nama = $tampil['nama'];
$pass = $tampil['pass'];
$foto = $tampil['foto'];

?>

<!-- general form elements -->
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Ubah Pengguna</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" value="<?= $username ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pengguna</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="nama" value="<?= $username ?>">
                </div>

                <div class="form-group">
                    <label for=""><img src="dist/img/<?= $foto ?>" width="100px"></label>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ganti Foto</label>
                    <input type="file" class="" name="foto">
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success" name="simpan"><i class="glyphicon glyphicon-save"></i>Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php

if (isset($_POST['simpan'])) {

    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $pass = $_POST['pass'];

    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];

    if (!empty($lokasi)) {

        move_uploaded_file($lokasi, "dist/img/" . $foto);

        $insert = $conn->query("UPDATE tb_user SET username = '$username', nama = '$nama',level = 'kasir', foto = '$foto' WHERE id = '$kode'");

        if ($insert) {
?>

            <script>
                alert('Pengguna Berhasil DiUbah');
                window.location.href = "?page=pengguna";
            </script>

        <?php
        }
    } else {

        $insert = $conn->query("UPDATE tb_user SET username = '$username', nama = '$nama', level = 'kasir', WHERE id = '$kode'");

        if ($insert) {
        ?>

            <script>
                alert('Pengguna Berhasil DiUbah');
                window.location.href = "?page=pengguna";
            </script>

<?php
        }
    }
}

?>