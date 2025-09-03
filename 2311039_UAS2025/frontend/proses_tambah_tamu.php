<?php
//koneksi ke Database
require_once 'koneksi.php';
//mengambil variabel yang dikerim dari form
$nama = $_GET['nama'];
$email = $_GET['email'];
$pesan = $_GET['pesan'];
$sql = "INSERT INTO tamu (nama,email,pesan) VALUES 
('$nama','$email','$pesan')";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
//Apabila Query untuk menginput pesan berhasil
if ($query) {
    header("location:tampil_tamu.php");
} else {
    echo "
<script>
alert('Pesan gagal Terkirim')
</script>
";
}
?>