<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
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

  h3 {
      font-size: 2rem;
      font-weight: bold;
      color: #603678;
      text-align: center;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .about-section {
      background-color: #f9f9f9;
      padding: 40px 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .about-section p {
      font-size: 1rem;
      color: #555;
      line-height: 1.8;
    }

    .about-section img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      margin-top: 20px;
    }

    @media (max-width: 768px) {
      .about-section {
        padding: 20px;
      }
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
<br>

  <div class="container">
    <h3>About Us</h3>
    <div class="about-section">
      <p>
        Selamat datang di Smoothiez, tempat di mana kesehatan dan rasa berpadu menjadi satu. Kami berdedikasi untuk
        menghadirkan smoothie berkualitas tinggi dengan bahan-bahan segar dan alami.
        Misi kami adalah membantu Anda menjalani gaya hidup sehat tanpa harus mengorbankan rasa.
      </p>
      <p>
        Smoothiez didirikan dengan tujuan untuk memberikan pilihan minuman sehat yang lezat, penuh nutrisi, dan cocok
        untuk segala usia.
        Kami percaya bahwa hidup sehat adalah hak setiap orang, dan kami berkomitmen untuk membuatnya lebih mudah dan
        menyenangkan bagi Anda.
      </p>
      <p>
        Tim kami terdiri dari para ahli yang bersemangat dalam menciptakan resep smoothie terbaik. Dengan menggunakan
        bahan-bahan segar dari petani lokal,
        kami memastikan setiap gelas smoothie yang Anda nikmati penuh dengan manfaat baik untuk tubuh.
      </p>
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



  </body>

  <script>
    document.querySelectorAll('.btn-buy-now').forEach(button => {
      button.addEventListener('click', () => {
        const whatsappNumber = button.getAttribute('data-whatsapp');
        window.open(`https://wa.me/${whatsappNumber}`, '_blank');
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>