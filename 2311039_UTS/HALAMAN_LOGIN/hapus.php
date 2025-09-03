<?php
include "koneksi_data.php";

// Cek apakah ID peserta ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buat query untuk menghapus data
    $sql = "DELETE FROM data_peserta WHERE id_peserta = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id);

    // Eksekusi query dan cek hasilnya
    if ($stmt->execute()) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup statement
    $stmt->close();
} else {
    echo "ID peserta tidak ditemukan.";
}

// Redirect ke halaman utama setelah penghapusan
header("Location: data_peserta.php");
exit;
?>