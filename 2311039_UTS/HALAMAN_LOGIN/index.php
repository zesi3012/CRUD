<!DOCTYPE html>
<html>

<head>
    <title>Membuat Form validasi Login Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <br><br>
    <center>
        <h2>HALAMAN LOGIN PENGGUNA</h2>
    </center>
    <div class="login">
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "Username dan Password anda salah! <br>";
            } else if ($_GET['pesan'] == "logout") {
                echo "anda berhasil logout!<br>";
            } else if ($_GET['pesan'] == "belum_login") {
                echo "untuk mengakses halaman ini, anda harus login dulu! <br>";
            }
        }
        ?>
        <br>
        <form action="login_proses.php" method="POST" onsubmit="return validasi()">
            <div>
                <label>USERNAME</label>
                <input type="text" name="username" id="username" placeholder="masukan username !">
            </div>
            <div>
                <label>PASSWORD</label>
                <input type="password" name="password" id="password" placeholder="masukan password !">
            </div>
            <div>
                <input type="submit" value="LOGIN" class="tombol">
                <label>Belum punya akun ?</label> <a href="register.php">REGISTRASI</a>
            </div>
        </form>
    </div>
</body>
<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var passsword = document.getElementById("password").value;
        if (username != "" && password != "") {
            return true;
        } else {
            alert('Username dan Password harus diisi !');
            return false;
        }
    }
</script>

</html>