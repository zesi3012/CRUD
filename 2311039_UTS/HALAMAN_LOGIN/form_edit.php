<?php
include "koneksi_data.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM data_peserta WHERE id_peserta='$id'";
    $result = $koneksi->query($sql);
    $row = $result->fetch_assoc();
} else {
    die("ID tidak ditemukan.");

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    $sql = "UPDATE data_peserta SET id_peserta='$id_peserta', nik_peserta='$nik_peserta', no_induk_peserta='$no_induk_peserta', nama='$nama', jenis_kelamin= '$jenis_kelamin', tempat_lahir='$tempat_lahir', alamat='$alamat', no_telp='$no_telp', modul_pelatihan='$modul_pelatihan' WHERE id_peserta='$id_peserta'";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil diupdate.";
        header("Location: data_peserta.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta</title>
</head>
<style>
    body {
        font-family: arial, sans-serif;
        background-color: #ffffff;
        color: #333;
        margin: 0;
        padding: 20px;
        align-items: center;
        flex-direction: column;
    }

    h2 {
        color: #630909;
        text-align: center;
    }

    form {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: auto;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"] {
        width: calc(100%-20px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #333;
    }

    input[type="date"] {
        width: 43%;
        padding: 10px;
        margin-bottom: 25px;
        border: 1px solid;
        border-radius: 4px;
        background-color: #ffffff;
        color: #333;
    }

    input[type="date"]:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    input[type="submit"]:hover {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
    }

    select {
        width: calc(48%);
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 4px;
        background-color: #ffffff;
        appearance: none;
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 12px;
    }

    select option {
        padding: 10px;
        background-color: #ffffff;
        color: #333;
    }

    select option:hover {
        background-color: #333;
    }

    input[type="submit"]:hover {
        background-color: #630909;
    }

    a {
        display: inline-block;
        margin-top: 15px;
        text-decoration: none;
        color: #630909;
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</head>

<body>
    <h2>Edit Data Peserta</h2>
    <form method="post">
        <input type="hidden" name="id_peserta" value="<?php echo htmlspecialchars($row['id_peserta']); ?>">

        <label for="id_peserta">ID Peserta:</label>
        <input type="text" name="id_peserta" value="<?php echo htmlspecialchars($row['id_peserta']); ?>" required>

        <label for="nik_peserta">NIK:</label>
        <input type="text" name="nik_peserta" value="<?php echo $row['nik_peserta']; ?>" required>

        <label for="no_induk_peserta">No Induk:</label>
        <input type="text" name="no_induk_peserta" value="<?php echo $row['no_induk_peserta']; ?>" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-Laki" <?php echo ($row['jenis_kelamin'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-laki
            </option>
            <option value="Perempuan" <?php echo ($row['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan
            </option>
        </select>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" required>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" value="<?php echo htmlspecialchars($row['tanggal_lahir']); ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required>

        <label for="no_telp">Telepon:</label>
        <input type="text" name="no_telp" value="<?php echo $row['no_telp']; ?>" required>

        <label for="modul_pelatihan">Modul:</label>
        <select name="modul_pelatihan" required>
            <option value="">Pilih Modul</option>
            <option value="Pemrograman" <?php echo ($row['modul_pelatihan'] == 'Pemrograman') ? 'selected' : ''; ?>>
                Pemrograman</option>
            <option value="Desain Grafis" <?php echo ($row['modul_pelatihan'] == 'Desain Grafis') ? 'selected' : ''; ?>>
                Desain Grafis</option>
            <option value="Animasi" <?php echo ($row['modul_pelatihan'] == 'Animasi') ? 'selected' : ''; ?>>Animasi
            </option>
        </select>
        <br>
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="data_peserta.php">Kembali</a>
</body>

</html>