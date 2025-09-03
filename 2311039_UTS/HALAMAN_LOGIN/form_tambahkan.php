<html>

<head>
    <title>Form Data Peserta Pelatihan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        a {
            text-decoration: none;
            color: #630909;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        label {
            margin-top: 10px;
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s;
        }

        input[type="date"]:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #630909;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #630909;
        }
    </style>
</head>

<body>
    <a href="data_peserta.php">Tampilkan Data</a>
    <br />
    <br />
    <form action="proses_simpan.php" method="post">
        <label>Id Peserta</label>
        <br />
        <input type="text" name="id_peserta" required />
        <br />
        <br />
        <label>NIK</label>
        <br />
        <input type="text" name="nik_peserta" required />
        <br />
        <br />
        <label>No Induk</label>
        <br />
        <input type="text" name="no_induk_peserta" required />
        <br />
        <br />
        <label>Nama</label>
        <br />
        <input type="text" name="nama" required />
        <br />
        <br />
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-Laki" <?php echo (isset($row['jenis_kelamin']) && $row['jenis_kelamin'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-laki</option>
            <option value="Perempuan" <?php echo (isset($row['jenis_kelamin']) && $row['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
        </select>
        <br />
        <br />
        <label>Tempat Lahir</label>
        <br />
        <input type="text" name="tempat_lahir" required />
        <br />
        <br />
        <label>Tanggal Lahir</label>
        <br />
        <input type="date" name="tanggal_lahir" required />
        <br />
        <br />
        <label>Alamat</label>
        <br />
        <input type="text" name="alamat" required />
        <br />
        <br />
        <label>Telepon</label>
        <br />
        <input type="text" name="no_telp" required />
        <br />
        <br />
        <label>Modul</label>
        <br />
        <select name="modul_pelatihan">
            <option value="Pemrograman">Pemrograman</option>
            <option value="Desain Grafis">Desain Grafis</option>
            <option value="Animasi">Animasi</option>
        </select>

        <input type="submit" value="Simpan" name="simpan" />
        <input type="reset" value="Batal" />
    </form>
</body>

</html>