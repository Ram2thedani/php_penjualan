<?php
include '../../config/koneksi.php';

$nama_barang = $_POST['nama_barang'];
$id_supplier = $_POST['id_supplier'];
$harga = $_POST['harga'];

$sql = "INSERT INTO barang (nama_barang, id_supplier, harga) VALUES ('$nama_barang', '$id_supplier', '$harga')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
        alert('Berhasil menambah data!');
        window.location.href='index.php';
    </script>";
} else {
    echo "<script>
        alert('Invalid username or password.');
        window.location.href='viewtambah.php';
    </script>";
}
