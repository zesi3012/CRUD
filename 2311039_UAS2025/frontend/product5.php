<?php
// Mulai sesi
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect ke login jika belum login
    exit();
}

include('koneksi.php'); // Menghubungkan ke database

// Ambil data produk dari database
$sql = "SELECT * FROM product"; // Pastikan tabel dan kolom sesuai
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
/* Mengatur Tampilan Navbar Container */
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


        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
            padding: 2rem;
        }

        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1rem;
            max-width: 300px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            width: 100%;
            max-width: 150px;
            margin: auto;
            display: block;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .product-image:hover {
            transform: scale(1.1);
        }

        .btn-buy-now {
            background-color: #603678;
            color: #fff;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 999px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-buy-now:hover {
            background-color: #502d60;
            transform: scale(1.05);
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
        <a href="product5.php">Menu</a>
        <a href="contact.php">Contact</a>
        <a href="aboutus.php">About Us</a>
        <a href="pengguna.php">Profile</a>
        <a href="login.php">Logout</a>
    </nav>
</header>


    <main>
        <section class="product-category-section">
            
            <div class="product-grid">
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($product = $result->fetch_assoc()): ?>
                        <div class="product-card">
                            <img src="foto/<?php echo htmlspecialchars($product['foto']); ?>" alt="Product Image" class="product-image">
                            <h3><?php echo htmlspecialchars($product['nama']); ?></h3>
                            <p><?php echo htmlspecialchars($product['deskripsi']); ?></p>
                            <p class="price">Rp <?php echo number_format($product['harga'], 0, ',', '.'); ?></p>
                            <p>Stok: <?php echo htmlspecialchars($product['stok']); ?></p>
                            <button class="btn-buy-now" data-whatsapp="6288902847787">Beli Sekarang</button>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p class="text-center">Tidak ada produk yang tersedia.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>

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
