<?php

$kode = $_GET['id'];
$hapus = $conn->query("DELETE FROM tb_pelanggan WHERE kode_plg = '$kode'");

if ($hapus) {
?>

    <script>
        alert('Pelanggan Berhasil DiHapus');
        window.location.href = "?page=pelanggan";
    </script>


<?php
}
?>