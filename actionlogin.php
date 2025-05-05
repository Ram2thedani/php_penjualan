<?php
session_start();
include 'config/koneksi.php';


// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];

// Prevent SQL Injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Query to check user credentials
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
    $_SESSION['username'] = $username;
    echo "<script>
        alert('Login successful! Welcome, $username');
        window.location.href='index.php';
    </script>";
} else {
    echo "<script>
        alert('Invalid username or password.');
        window.location.href='login.php';
    </script>";
}

mysqli_close($conn);
