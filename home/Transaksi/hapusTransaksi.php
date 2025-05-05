<?php
include '../../config/koneksi.php';

$id_transaksi = $_GET['id_transaksi'];


$sql = "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
        alert('Berhasil menghapus data!');
         window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Invalid username or password.');
        window.location.href='viewtambah.php';
    </script>";
}
