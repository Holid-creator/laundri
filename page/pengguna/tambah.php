<!-- general form elements -->
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Data Pengguna</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pengguna</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Foto</label>
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
    $upload = move_uploaded_file($lokasi, "dist/img/" . $foto);

    if ($upload) {

        $insert = $conn->query("INSERT INTO tb_user (username, nama, password, level, foto) VALUES ('$username', '$nama', '$pass', 'kasir', '$foto')");

        if ($insert) {
?>

            <script>
                alert('Pengguna Berhasil Ditambahkan');
                window.location.href = "?page=pengguna";
            </script>


<?php
        }
    }
}

?>