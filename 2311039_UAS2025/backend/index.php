<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login Pengguna</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            margin: 0 auto;
        }

        .form-control {
            border-color: #ccc; /* Mengatur warna border input */
        }

        .btn-primary {
            background-color: #000; /* Mengatur warna tombol */
            border-color: #000; /* Mengatur warna border tombol */
            margin-bottom: 5px;
        }
        .btn-secondary {
            background-color: #000; /* Mengatur warna tombol */
            border-color: #000; /* Mengatur warna border tombol */
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="login">
        <h2>HALAMAN LOGIN PENGGUNA</h2>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<p class='text-danger'>Username dan Password anda salah!</p>";
            } else if ($_GET['pesan'] == "logout") {
                echo "<p class='text-success'>Anda berhasil logout!</p>";
            } else if ($_GET['pesan'] == "belum_login") {
                echo "<p class='text-warning'>Untuk mengakses halaman ini, anda harus login dulu!</p>";
            }
        }
        ?>
        <form action="login_proses_admin.php" method="POST" onsubmit="return validasi()">
            <div class="form-group">
                <label for="username">USERNAME</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
            </div>

            <div class="form-group">
                <label for="password">PASSWORD</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <br>
            <button type="submit" class="btn btn-secondary">LOGIN</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href='../frontend/home.php'">KELUAR</button>

            <p>Belum punya akun? <a href="register.php">REGISTRASI</a></p>
        </form>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function validasi() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username == "" || password == "") {
                alert('Username dan Password harus diisi!');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>