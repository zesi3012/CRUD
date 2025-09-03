<?php
session_start();
include '../frontend/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
$user = mysqli_fetch_assoc($login);

if ($user && password_verify($password, $user['password'])) {
    
    $_SESSION['username'] = $user['username'];
    $_SESSION['status'] = "login";

   
    header("location: dashboard.php");
    exit;
} else {
    
    header("location: index.php?pesan=gagal");
    exit;
}
?>
