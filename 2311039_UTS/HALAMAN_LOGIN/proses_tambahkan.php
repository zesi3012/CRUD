<?php
// Memeriksa apakah formulir telah disubmit
if (isset($_POST['simpan'])) {
    // Mengambil data dari formulir
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

    // Simpan data ke file (data.txt)
    $data = "$id_peserta|$nik_peserta|$no_induk_peserta|$nama|$jenis_kelamin|$tempat_lahir|$tanggal_lahir|$alamat|$no_telp|$modul_pelatihan\n";
    file_put_contents('data.txt', $data, FILE_APPEND);

    // Arahkan ke halaman data peserta
    header('Location: data_peserta.php');
    exit();
}
?>