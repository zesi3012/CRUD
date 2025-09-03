<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
        header.navbar-container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
           
        }

        header.navbar-container .nav-list ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 1.5rem;
        }

        header.navbar-container .nav-list li {
            list-style: none;
        }

        header.navbar-container .nav-list li a {
            text-decoration: none;
            color: #333;
            font-size: 1rem;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        header.navbar-container .nav-list li a:hover {
            background-color: #603678;
            color: white;
        }

        .login-container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .login {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #603678;
        }

        .login label {
            display: block;
            font-size: 0.9rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .login input[type="text"],
        .login input[type="password"] {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login input[type="submit"],
        .login input[type="button"] {
            width: 100%;
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

        .login input[type="submit"]:hover,
        .login input[type="button"]:hover {
            background-color: #502d60;
        }

        .login a {
            color: #603678;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .login a:hover {
            text-decoration: underline;
        }

        

        .footer {
            background-color: #603678;
            padding: 2rem 0;
            color: white;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #cccccc;
        }

        .social-links a {
            color: white;
            font-size: 1.5rem;
            margin: 0 0.5rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-links a:hover {
            color: #cccccc;
            transform: scale(1.1);
        }
</style>
</head>

<body>
    
    <header class="navbar-container">
        <div class="logo">
            <img src="img/smoothiez.png" alt="width: 150px;" height="150px">
        </div>
        <nav class="nav-list">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="login-container">
        <div class="login">
            <h2>Halaman Login Pengguna</h2>
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<p style='color: red; text-align: center;'>Username dan Password Anda salah!</p>";
                } else if ($_GET['pesan'] == "logout") {
                    echo "<p style='color: green; text-align: center;'>Anda berhasil logout!</p>";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "<p style='color: orange; text-align: center;'>Anda harus login terlebih dahulu!</p>";
                }
            }
            ?>
            <form action="login_proses.php" method="POST" onsubmit="return validasi()">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username Anda">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password Anda">

                <input type="submit" value="Login" onclick="window.location.href='product5.php'>

                <div style="text-align: center; margin-top: 1rem;">
                    <label>Belum punya akun?</label>
                    <a href="register.php">Registrasi</a>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <h5>SMOOTHIEZ</h5>
                    <p>Menikmati smoothies sehat, segar, dan penuh manfaat untuk gaya hidup Anda.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <div class="footer-links">
                        <a href="home.php">Home</a><br>
                        <a href="product.php">Menu</a><br>
                        <a href="contact.php">Contact</a><br>
                        <a href="aboutus.php">About Us</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <div class="social-links">
                        <a href="https://www.instagram.com/zesi.w?igsh=cmx1NWY0Z3drOGJ0"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/qr/IZDOQRNSYSL5O1"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://x.com/halozes_"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('.btn-buy-now').forEach(button => {
            button.addEventListener('click', () => {
                const whatsappNumber = button.getAttribute('data-whatsapp');
                window.open(`https://wa.me/${whatsappNumber}`, '_blank');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validasi() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username !== "" && password !== "") {
                return true;
            } else {
                alert("Username dan Password harus diisi!");
                return false;
            }
        }
    </script>
</body>

</html>
