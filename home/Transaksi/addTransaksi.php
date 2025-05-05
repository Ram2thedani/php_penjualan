<?php
include '../../config/koneksi.php';
date_default_timezone_set("Asia/Jakarta");
$tanggal = date("Y-m-d H:i:s");
$status = "Belum Selesai";


$sql = "INSERT INTO transaksi (tanggal, status) VALUES ('$tanggal', '$status')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
        alert('Berhasil menambah data!');
        window.location.href='index.php';
    </script>";
} else {
    echo "<script>
        alert('Invalid username or password.');
        window.location.href='index.php';
    </script>";
}
