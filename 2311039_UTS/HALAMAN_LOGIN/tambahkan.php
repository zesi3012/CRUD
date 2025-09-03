<?php 
 include "koneksi_data.php";

 if (isset($_POST['simpan'])) { 
    $id_peserta = $_POST['id_peserta']; 
    $nik_peserta = $_POST['nik_peserta']; 
    $no_induk_peserta = $_POST['no_induk_peserta']; 
    $nama = $_POST['nama']; 
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir']; 
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $modul_pelatihan = $_POST['modul_pelatihan'];     
    $sql = "INSERT INTO data_peserta (id_peserta, nik_peserta, no_induk_peserta, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, no_telp, modul_pelatihan) 
         VALUES ('$nim', '$nama','$jurusan','$alamat','$telp')"; 
    $result = $koneksi->query($sql); 
 
     header("location:data_peserta.php");
    exit();
 }
?>
