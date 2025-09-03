<?php
ob_start(); // Memulai output buffering
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menyaring dan memvalidasi input
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // Validasi input kosong
    if (empty($nama) || empty($email) || empty($username) || empty($password)) {
        die("Semua field wajib diisi!");
    }

    // Validasi format email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Format email tidak valid!");
    }

    // Hash password untuk keamanan
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk memeriksa apakah username atau email sudah ada
    $checkQuery = "SELECT id FROM user WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($checkQuery);
    if (!$stmt) {
        die("Error: " . $conn->error);
    }
    
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $stmt->store_result();
    echo "Number of rows: " . $stmt->num_rows;
    

    if ($stmt->num_rows > 0) {
        die("Username atau email sudah digunakan!");
    }
    $stmt->close();

    // Query untuk memasukkan data
    $query = "INSERT INTO user (nama, email, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        die("Error: " . $conn->error);
    }
    
    $stmt->bind_param("ssss", $nama, $email, $username, $hashedPassword);

    // Eksekusi query
    if ($stmt->execute()) {
        header("Location: login.php");
        exit;
    } else {
        die("Terjadi Kesalahan: " . $stmt->error);
    }
    if (false) {
        $stmt = $conn->prepare("QUERY");
    }
    $stmt->close();
    $conn->close();
}
?>
