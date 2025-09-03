<?php
require_once '../frontend/koneksi.php';
//Mengambil Data Dari tombol hapus
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id ='$id'";
$query = mysqli_query($conn, $sql);
//apabila query pada update data benar
if ($query) {
    header("location: data_pengguna.php");
} else {
    echo "Data Gagal Dihapus";
}
?>