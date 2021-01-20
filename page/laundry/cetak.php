<?php

include '../../include/koneksi.php';

$id = $_GET['id'];
$ambil = $conn->query("SELECT * FROM tb_laundri, tb_pelanggan, tb_user WHERE tb_laundri . id_plg = tb_pelanggan . kode_plg AND tb_laundri . kode_user = tb_user . id");
$tampil = $ambil->fetch_assoc();
?>

<script>
    window.print();
    window.onfocus = function() {
        window.close();
    }
</script>

<body onload='window.print()'>
    <table>
        <tbody>
            <tr>
                <td>
                    Holid Laundry
                </td>
            </tr>
            <tr>
                <td>
                    Jl. Sudamanik Kp. Pasir sereh Rt. oo4 Rw. 006
                </td>
            </tr>
            <tr>
                <td>
                    Telp : 085780781987
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
    <tr style="width: 300px; text-align:center;"></tr>

    <table>
        <tbody>
            <tr>
                <td>Kasir</td>
                <td>:</td>
                <td><?= $tampil['username'] ?></td>
            </tr>
            <tr>
                <td>Pelanggan</td>
                <td>:</td>
                <td><?= $tampil['n_plg'] ?></td>
            </tr>
            <tr>
                <td>Tanggal Terima</td>
                <td>:</td>
                <td><?= date('d F Y', strtotime($tampil['tgl_terima'])) ?></td>
            </tr>
            <tr>
                <td>Tanggal Selesai</td>
                <td>:</td>
                <td><?= date('d F Y', strtotime($tampil['tgl_selesai'])) ?></td>
            </tr>
            <tr>
                <td>Jumlah Kiloan</td>
                <td>:</td>
                <td><?= $tampil['jml_kiloan'] ?> Kg.</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>:</td>
                <td>Rp. <?= number_format($tampil['nominal']) ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><?= $tampil['status'] ?></td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td>:</td>
                <td><?= $tampil['catatan'] ?></td>
            </tr>
        </tbody>
    </table>
    <br><br>

    <table>
        <tr>
            <td>Catatan :</td>
        </tr>
        <tr>
            <td style="width: 300px;">
                Barang Yang tidak diambil selama 3 bulan bukan tanggung jawab Laundry.
            </td>
        </tr>
    </table>
</body>