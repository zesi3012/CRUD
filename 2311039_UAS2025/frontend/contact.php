<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
</head>
<style>
header.navbar-container {
    width: 100%;
    max-width: 1200px;
    padding-block: 0.5rem; /* Mengurangi padding agar lebih dekat ke atas */
    margin-inline: auto;
    display: flex;
    justify-content: space-between; /* Menyusun logo dan nav menu sejajar */
    align-items: center;
}

/* Tampilan Logo */
header.navbar-container .logo img {
    width: 150px;
    height: auto;
}

/* Menata dan menampilkan menu navigasi */
header.navbar-container nav {
    display: flex;
    gap: 2rem;
}

/* Menghilangkan tanda list-style pada menu */
header.navbar-container nav a {
    padding: 0.5rem 1.5rem;
    border-radius: 50px; /* Membulatkan tombol */
    text-decoration: none;
    font-size: 1.05rem;
    font-weight: 500;
    color: black;
    transition: all 0.3s ease-in-out;
}

/* Efek hover pada menu */
header.navbar-container nav a:hover {
    background-color: #603678;
    color: white;
}

/* Responsif untuk tampilan mobile */
@media (max-width: 768px) {
    /* Mengubah ukuran logo pada perangkat mobile */
    header.navbar-container .logo img {
        width: 120px;
    }

    /* Menurunkan posisi menu pada tampilan mobile */
    header.navbar-container nav {
        gap: 1rem;
    }

    /* Mengatur ukuran menu untuk mobile */
    header.navbar-container nav a {
        padding: 0.5rem 1rem;
        font-size: 0.95rem;
    }
}

  .container {
        margin-top: 50px;
    }

    .form-label {
        font-weight: 600;
    }

    .btn-dark {
        background-color: #603678;
        border: none;
        padding: 10px 20px;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: #502d60;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #ccc;
        box-shadow: inset 0 1px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #603678;
        box-shadow: 0 0 0 0.2rem rgba(96, 54, 120, 0.25);
    }

    .row {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    footer {
        background-color: #603678;
        color: white;
        padding: 20px 0;
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
        <img src="img/smoothiez.png" alt="Logo Smoothiez">
    </div>
    <nav>
        <a href="home.php">Home</a>
        <a href="contact.php">Contact</a>
        <a href="aboutus.php">About Us</a>
        <a href="login.php">Login</a>
    </nav>
</header>

  <div class="container">
    <div class="row justify-content-center">
        <!-- Formulir -->
        <div class="col-md-8 col-lg-6">
            <h3 class="text-center mb-4">Kirim Pesan</h3>
            <form action="proses_tambah_tamu.php" method="GET">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea name="pesan" id="pesan" class="form-control" rows="5" placeholder="Tulis pesan Anda" required></textarea>
                </div>
                <button class="btn btn-dark w-100 mt-3 mb-4" type="submit">KIRIM</button> <!-- margin-bottom ditambahkan di sini -->
            </form>
        </div>
    </div>
</div>
<br>

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
</body>

</html>