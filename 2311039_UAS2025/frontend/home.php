<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
</head>
<style>
  header.navbar-container {
    width: 100%;
    max-width: 1200px;
    padding-: 1rem 2rem; /* Mengurangi padding agar lebih dekat ke atas */
    margin: auto;
    display: flex;
    justify-content: space-between; /* Menyusun logo dan nav menu sejajar */
    align-items: center;
    z-index: 9999;
    
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

  /* Styling Welcome Section */
.welcome-section {
  padding: 40px;
  text-align: center;
  background: linear-gradient(to right,rgb(223, 209, 211),rgb(177, 137, 214));
  border-radius: 15px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
  max-width: 800px;
  color: #333;
}

/* Heading Styling */
.welcome-section h1 {
  font-size: 2.5rem;
  color: #4c2c72;
  margin-bottom: 10px;
  font-weight: 700;
  letter-spacing: 1px;
}

/* Tagline Styling */
.welcome-section .tagline {
  font-size: 1.5rem;
  color: #603678;
  font-style: italic;
  margin-bottom: 20px;
}

.welcome-section .description {
  font-size: 1rem;
  line-height: 1.6;
  color: #444;
}
.container {
  padding-left: 20px;
  padding-right: 20px;
}

.custom-card {
  border: none;
  border-radius: 15px; 
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
  transition: transform 0.3s ease, box-shadow 0.3s ease; 
}

.custom-card:hover {
  transform: scale(1.05); 
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); 
}

.card-img-top {
  border-radius: 15px 15px 0 0; 
  max-height: 200px;
  object-fit: cover; 
}

.card-body {
  text-align: center;
}

.card-title {
  font-size: 1.2rem;
  font-weight: bold;
  color: #603678; 
}

.card-text {
  color: #555;
  font-size: 0.95rem;
}

@media (max-width: 768px) {
  .container {
    padding-left: 10px;
    padding-right: 10px;
  }

  .custom-card {
    margin-bottom: 15px;
  }
}


</style>

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

  <div class="welcome-section">
    <h1>Selamat Datang di SMOOTHIEZ</h1>
    <p class="tagline">Nikmati Kesegaran Alami dalam Setiap Tegukan</p>
    <p class="description">
      Kami menghadirkan smoothies segar dan sehat, dibuat dari bahan-bahan berkualitas tinggi tanpa tambahan pengawet
      atau pemanis buatan. Cocok untuk Anda yang peduli pada gaya hidup sehat tanpa mengorbankan rasa.
    </p>
  </div>
  <br>

  <div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card custom-card">
          <img src="img/berry.jpg" class="card-img-top" alt="banana berry">
          <div class="card-body">
            <h5 class="card-title">Berry Smoothie</h5>
            <p class="card-text">Nikmati smoothie segar dari buah-buahan pilihan untuk menemani hari Anda.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card custom-card">
          <img src="img/green.jpg" class="card-img-top" alt="green smoothie">
          <div class="card-body">
            <h5 class="card-title">Green Smoothie</h5>
            <p class="card-text">Kesehatan dalam segelas smoothie dengan kandungan nutrisi tinggi.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card custom-card">
          <img src="img/alpukat.jpg" class="card-img-top" alt="avocado smoothie">
          <div class="card-body">
            <h5 class="card-title">Avocado Smoothie</h5>
            <p class="card-text">Smoothie alpukat creamy yang kaya akan vitamin dan serat.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card custom-card">
          <img src="img/mangga.jpg" class="card-img-top" alt="mango smoothie">
          <div class="card-body">
            <h5 class="card-title">Mango Smoothie</h5>
            <p class="card-text">Manis segar mangga pilihan dalam segelas smoothie lezat.</p>
          </div>

        </div>
      </div>
      <a class="btn btn-light" href="login.php" role="button">Login untuk Melihat Lebih Banyak Menu</a>
      <br>

<body>
  <script scr="../js/bootstrap.min.js"></script>
  <script scr=../js/jquery.min.js"></script>
</body>
</body>

</html>