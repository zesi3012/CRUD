<?php
require_once '../frontend/koneksi.php';

// Mengambil data yang dikirim dari Form Edit
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];


// Perluasan query untuk mencegah SQL Injection
$sql = "UPDATE tamu SET nama=?, email=?, pesan=? WHERE id=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssi", $nama, $email, $pesan, $id);
$query = mysqli_stmt_execute($stmt) or die(mysqli_error($conn));

// Apabila query pada update data benar
if ($query) {
    echo "
        <script>
             alert('Data Berhasil Disimpan')
        </script>
        ";

    header("location:tampil_tamu_admin.php");
    exit; // Tambahkan exit untuk mencegah eksekusi kode setelah header
} else {
    echo "
        <script>
             alert('Gagal Mengupdate Data')
        </script>
        ";
}

// Tutup koneksi
mysqli_close($conn);
?>