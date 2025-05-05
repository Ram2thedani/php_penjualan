<?php
include '../../config/koneksi.php';
$id_user = $_GET['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE user SET nama = '$nama', username = '$username', password = '$password' 
WHERE id_user = '$id_user' ";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
        alert('Berhasil mengupdate data!');
        window.location.href='index.php';
    </script>";
} else {
    echo "<script>
        alert('Invalid username or password.');
        window.location.href = document.referrer;
    </script>";
}
