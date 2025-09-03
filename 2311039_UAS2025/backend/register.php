<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color:rgb(5, 4, 5);
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            background-color:rgb(13, 12, 14);
            border: none;
            width: 100%;
            border-radius: 8px;
            padding: 10px;
        }

        .btn-primary:hover {
            background-color:rgb(5, 5, 5);
        }

        .text-center a {
            color:rgb(13, 13, 14);
            font-weight: bold;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>HALAMAN DAFTAR ADMIN</h2>
        <form action="proses_register.php" method="POST" onsubmit="return validasi()">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama!" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email!" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username!" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password!" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
            <div class="text-center mt-3">
                <span>Sudah punya akun? </span><a href="index.php">Masuk</a>
            </div>
        </form>
    </div>

    <script>
        function validasi() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username !== "" && password !== "") {
                return true;
            } else {
                alert('Username dan Password harus diisi!');
                return false;
            }
        }
    </script>
</body>

</html>
