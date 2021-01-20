<?php

$id = $_GET['id'];

$ambil = $conn->query("SELECT * FROM tb_laundri WHERE id_laundri = '$id'");
$tampil = $ambil->fetch_assoc();

$tgl = $tampil['tgl_terima'];
$nominal = $tampil['nominal'];
$catatan = $tampil['catatan'];
$kode_user = $tampil['kode_user'];

$data = $conn->query("INSERT INTO tb_transaksi (kode_user, tgl_transaksi, pemasukan, catatan, keterangan) VALUES ('$kode_user', '$tgl', '$nominal', '$catatan', 'pemasukan')");

$data2 = $conn->query("UPDATE tb_laundri SET status = 'Lunas' WHERE id_laundri = '$id'");


if ($data) {
?>

    <script>
        alert('Laundry Berhasil Ditdilunaskan');
        window.location.href = "?page=laundry";
    </script>


<?php
}
