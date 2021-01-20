<!-- general form elements -->

<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah Transaksi Pengeluaran</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post">
            <div class="box-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" name="t_transaksi">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nominal</label>
                    <input type="number" class="form-control" name="nominal">
                </div>
                <div class="form-group">
                    <label>Catatan</label>
                    <textarea class="form-control" rows="3" placeholder="Masukkan Barang yang akan di cuci" name="catatan"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<?php

if (isset($_POST['simpan'])) {

    $t_transaksi = $_POST['t_transaksi'];
    $nominal     = $_POST['nominal'];
    $catatan     = $_POST['catatan'];

    $insert = $conn->query("INSERT INTO tb_transaksi (kode_user, tgl_transaksi, pengeluaran, catatan, keterangan) VALUES ('$id_user', '$t_transaksi', '$nominal', '$catatan', 'pengeluaran')");

    if ($insert) {
?>

        <script>
            alert('Pengeluaran Berhasil Ditambahkan');
            window.location.href = "?page=transaksi";
        </script>


<?php
    }
}

?>