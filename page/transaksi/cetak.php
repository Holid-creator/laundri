<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

include '../../include/koneksi.php';

?>

<script>
    window.print();
    window.onfocus = function() {
        window.close();
    }
</script>

<body onload='window.print()'>

    <table width="100%" border="1px" style="border-collapse: collapse;">
        <caption style="margin-bottom: 10px; font-size: 20px; font-family: arial; font-weight:bold">Laporan Transaksi Pemasukan dan pengeluaran</caption>
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

</body>