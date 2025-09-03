<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$username' AND
password='$password'");
$proses = mysqli_num_rows($login);
if ($proses > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: admin/index.php");
} else {
    header("location: index.php?pesan=gagal");
}
?>