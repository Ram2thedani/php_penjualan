<?php
include '../../config/koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password')";
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
