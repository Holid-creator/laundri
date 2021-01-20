<?php

$id = $_GET['id'];
$hapus = $conn->query("DELETE FROM tb_user WHERE id = '$id'");

if ($hapus) {
?>

    <script>
        alert('Pengguna Berhasil DiHapus');
        window.location.href = "?page=pengguna";
    </script>

<?php
}
?>