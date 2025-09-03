<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style_index.css">
</head>

<body>
    <h2>HALAMAN ADMIN</h2>
    <hr>
    <br>
 <?php   
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location: admin/index.php?pesan=belum_login");
    }
    ?>
    <h2>SELAMAT DATANG <?php echo $_SESSION['username']; ?></h2>
    <h3>Anda Telah Berhasil Login !</h3>
    <br><br>
    <a href="../data_peserta.php"><button class="tombol">Data Peserta</button></a>
    <br><br>
    <a href="logout.php"><button class="tombol">LOGOUT</button></a>
</body>
</html>