<?php

$ambil = $conn->query("SELECT kode_plg FROM tb_pelanggan ORDER BY kode_plg DESC");
$tampil = $ambil->fetch_assoc();

$kode = $tampil['kode_plg'];

$urut = substr($kode, 4, 4);

$tambah = (int) $urut + 1;

if (strlen($tambah) == 1) {
    $format = "PLG-" . "000" . $tambah;
} elseif (strlen($tambah) == 2) {
    $format = "PLG-" . "00" . $tambah;
} elseif (strlen($tambah) == 3) {
    $format = "PLG-" . "0" . $tambah;
} else {
    $format = "PLG-" . $tambah;
}
?>

<!-- general form elements -->
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Data Pelanggan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Pelanggan</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="k_plg" value="<?= $format ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="n_plg">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Telepon</label>
                    <input type="text" class="form-control" name="telp">
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3" placeholder="Enter Your Address..." name="alamat"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php

if (isset($_POST['simpan'])) {

    $kode = $_POST['k_plg'];
    $nama = $_POST['n_plg'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $insert = $conn->query("INSERT INTO tb_pelanggan (kode_plg, n_plg, alamat, telpon) VALUES ('$kode', '$nama', '$alamat', '$telp')");

    if ($insert) {
?>

        <script>
            alert('Pelanggan Berhasil Ditambahkan');
            window.location.href = "?page=pelanggan";
        </script>


<?php
    }
}

?>