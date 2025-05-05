<?php
include '../../config/koneksi.php';

$id_barang = $_GET['id_barang'];


$sql = "DELETE FROM barang WHERE id_barang = '$id_barang'";
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
