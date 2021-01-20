<script>
    function sum() {

        var jml_kiloan = document.getElementById('jml_kiloan').value;
        var total = parseInt(jml_kiloan) * 7000;

        if (!isNaN(total)) {

            document.getElementById('nominal').value = total;
        }
    }
</script>


<!-- general form elements -->

<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah Transaksi Laundry</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pilih Nama Pelanggan</label>
                    <select name="n_plg" class="form-control" required>
                        <option value="">Nama Pelanggan</option>
                        <?php

                        $ambil = $conn->query("SELECT * FROM tb_pelanggan");
                        while ($tampil = $ambil->fetch_assoc()) {

                            echo "<option value='$tampil[kode_plg]'>$tampil[n_plg]</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Terima</label>
                    <input type="date" class="form-control" name="t_terima">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Selesai</label>
                    <input type="date" class="form-control" name="t_selesai">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Kiloan</label>
                    <input type="number" class="form-control" onkeyup="sum();" name="jml_kiloan" id="jml_kiloan" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="number" readonly class="form-control" name="nominal" id="nominal">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Pilih Status</label>
                    <select name="status" class="form-control" required>
                        <option value="">Status</option>
                        <option value="Lunas">Lunas</option>
                        <option value="Belum Lunas">Belum Lunas</option>

                        ?>
                    </select>
                </div>
                <!-- textarea -->
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

    $n_plg      = $_POST['n_plg'];
    $t_terima   = $_POST['t_terima'];
    $t_selesai  = $_POST['t_selesai'];
    $jml_kiloan = $_POST['jml_kiloan'];
    $total      = $_POST['nominal'];
    $status     = $_POST['status'];
    $catatan    = $_POST['catatan'];

    $insert = $conn->query("INSERT INTO tb_laundri (id_plg, kode_user, tgl_terima, tgl_selesai, jml_kiloan, nominal, status, catatan) VALUES ('$n_plg', '$id_user', '$t_terima', '$t_selesai', '$jml_kiloan', '$total', '$status', '$catatan')");

    if ($insert) {
?>

        <script>
            alert('Laundry Berhasil Ditambahkan');
            window.location.href = "?page=laundry";
        </script>


        <?php
    }

    if ($status == 'Lunas') {

        $insert = $conn->query("INSERT INTO tb_transaksi (kode_user, tgl_transaksi, pemasukan, catatan, keterangan) VALUES ('$id_user', '$t_terima','$total', '$catatan', 'pemasukan')");

        if ($insert) {
        ?>

            <script>
                alert('Laundry Berhasil Ditambahkan');
                window.location.href = "?page=laundry";
            </script>


<?php
        }
    }
}

?>