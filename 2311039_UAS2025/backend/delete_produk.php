<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

include('../frontend/koneksi.php'); // Menghubungkan ke database

// Mengambil id produk dari URL
$id = $_GET['id'];

// Hapus produk dari database
$sql = "DELETE FROM product WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Produk berhasil dihapus!";
    header("Location: data.php"); // Redirect kembali ke halaman dashboard
    exit();
} else {
    echo "Gagal menghapus produk!";
    exit();
}
?>
