<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .register {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .register h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #603678;
        }

        .register form {
            display: flex;
            flex-direction: column;
        }

        .register label {
            font-size: 0.9rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .register input[type="text"],
        .register input[type="email"],
        .register input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .register input[type="submit"] {
            width: 100%;
            margin: 1px;
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            background-color: #603678;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register input[type="submit"]:hover {
            background-color: #502d60;
        }

        .register a {
            color: #603678;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .register a:hover {
            text-decoration: underline;
        }

        .register div:last-child {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register">
            <h2>HALAMAN REGISTRASI</h2>
            <form action="register_proses.php" method="POST" onsubmit="return validasi()">
                <div>
                    <label for="nama">NAMA LENGKAP</label>
                    <input type="text" name="nama" id="nama" placeholder="Masukkan nama!" required>
                </div>
                <div>
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="Masukkan email!" required>
                </div>
                <div>
                    <label for="username">USERNAME</label>
                    <input type="text" name="username" id="username" placeholder="Masukkan username!" required>
                </div>
                <div>
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" id="password" placeholder="Masukkan password!" required>
                </div>
                <div>
                    <input type="submit" value="Daftar">
                    <p>Sudah punya akun? <a href="../frontend/login.php">Masuk</a></p>
                </div>
            </form>
        </div>
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
