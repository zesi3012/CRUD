<?php
include "koneksi_data.php";

echo "<a href='form_tambahkan.php'>Tambah Data baru</a>";
echo "<br><br>";

echo "<a href='index.php'>Logout</a>";
echo "<br><br>";

$sql = "SELECT * FROM data_peserta";
$result = $koneksi->query($sql);

$no = 1;
?>

<style>
    body {
        font-family: arial, sans-serif;
        background-color: #ffffff;
        color: #333;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: bold;
    }

    a {
        color: #630909;
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid #630909;
        transition: background-color 0.3s, color 0.3s;
    }

    a:hover {
        background-color: #630909;
        color: white;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        border: 1px solid;
        padding: 8px;
        text-align: left;   
    }
    th {
        background-color: #333;
        color: white;
        text-align: center;
    }

    tr:hover {
        background-color: #ece0e0;
    }

    a {
        color: ##007BFF;
        text-decoration: none;
        padding: 5px 10px;
        
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }

    a:hover {
        background-color: #630909;
        color: white;
    }
</style>

<h2>Data Peserta Pelatihan</h2>

<table>
    <tr>
        <th>No</th>
        <th>Id</th>
        <th>NIK</th>
        <th>No Induk</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Modul</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row= $result->fetch_assoc()): ?>
        <tr> 
            <td><?php echo $no++; ?></td> 
            <td><?php echo $row['id_peserta']; ?></td>
            <td><?php echo $row['nik_peserta']; ?></td>
            <td><?php echo $row['no_induk_peserta']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['jenis_kelamin']; ?></td>
            <td><?php echo $row['tempat_lahir']; ?></td>
            <td><?php echo $row['tanggal_lahir']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['no_telp']; ?></td>
            <td><?php echo $row['modul_pelatihan']; ?></td>
            <td>
                <a href="form_edit.php?id=<?php echo $row['id_peserta']; ?>">Edit</a>
                <a href="hapus.php?id=<?php echo $row['id_peserta']; ?>">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
