<?php

session_start();
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Akses tidak valid. <a href="login.php">Kembali</a>');
}

if (!isset($_POST['username']) || empty($_POST['username'])) {
    die('Username tidak boleh kosong. <a href="login.php">Coba lagi</a>');
}
if (!isset($_POST['password']) || empty($_POST['password'])) {
    die('Password tidak boleh kosong. <a href="login.php">Coba lagi</a>');
}

$Username = strtolower(trim($_POST['username'])); // Ubah ke huruf kecil untuk konsistensi
$Password = trim($_POST['password']);

$sql = "SELECT * FROM user WHERE LOWER(username) = ? OR LOWER(email) = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $Username, $Username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    
    // Debug: Tampilkan informasi password
    echo "Password dari database: " . $user['password'] . "<br>";
    echo "Password yang dimasukkan: " . $Password . "<br>";

    if (password_verify($Password, $user['password'])) {
        echo "Password cocok! <br>";
        $_SESSION['username'] = $user['username'];
        header('Location: product5.php');
        exit();
    } else {
        echo 'Password salah. <a href="login.php">Coba lagi</a>';
    }
} else {
    echo 'Username atau email tidak ditemukan. <a href="login.php">Coba lagi</a>';
}

$stmt->close();
$conn->close();


?>