<?php
include '../../config/koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$id_barang = $_POST['id_barang'];


$sql = "INSERT INTO detail_transaksi (id_transaksi, id_barang) VALUES ('$id_transaksi', '$id_barang')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
        alert('Berhasil menambah data!');
        window.location.href = 'detail.php?id_transaksi=" . $id_transaksi . "';
    </script>";
} else {
    echo "<script>
        alert('Invalid username or password.');
        window.location.href='viewtambah.php';
    </script>";
}
