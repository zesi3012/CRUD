<?php
require_once '../frontend/koneksi.php';
//Mengambil Data Dari tombol hapus
$id = $_GET['id'];
$sql = "DELETE FROM tamu WHERE id ='$id'";
$query = mysqli_query($conn, $sql);
//apabila query pada update data benar
if ($query) {
    header("location:tampil_tamu_admin.php");
} else {
    echo "Data Gagal Dihapus";
}
?>