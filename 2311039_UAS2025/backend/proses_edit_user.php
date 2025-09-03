<?php
include "../frontend/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Ambil data pengguna berdasarkan ID
    $stmt = $conn->prepare("SELECT * FROM admin WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        echo "Pengguna tidak ditemukan!";
        exit();
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    // Proses update data pengguna
    $id = intval($_POST['id']);
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("UPDATE admin SET nama = ?, username = ?, email = ?, password = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $nama, $username, $email, $password, $id);

    if ($stmt->execute()) {
        header("Location: profile.php?success=update");
        exit();
    } else {
        echo "Gagal memperbarui data!";
    }
} else {
    echo "Akses tidak valid!";
    exit();
}
?>