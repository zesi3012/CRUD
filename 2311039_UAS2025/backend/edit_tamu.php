<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tamu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    /* Atur warna latar belakang halaman */
    body {
        background-color: #f4f6f9;
        font-family: Arial, sans-serif;
    }

    /* Sticky header dengan latar belakang */
    .sticky-top {
        color: black;
        padding: 15px;
        text-align: center;
    }

    h3 {
        margin: 0;
        font-size: 1.8rem;
    }

    /* Styling form */
    form {
        background-color: white;
        padding: 30px;
        margin: 50px auto;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
    }

    .container {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        color: #333;
        font-size: 1rem;
        margin-bottom: 5px;
    }

    input.form-control, textarea.form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 1rem;
        color: #333;
        box-sizing: border-box;
        margin-top: 5px;
    }

    input.form-control:focus, textarea.form-control:focus {
        border-color:rgb(8, 8, 8);
        outline: none;
        box-shadow: 0 0 5px rgba(11, 1, 17, 0.5);
    }

    .btn-dark {
        background-color:rgb(12, 1, 19);
        color: white;
        font-size: 1rem;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color:rgb(7, 0, 10);
    }

    /* Gaya untuk tombol */
/* Gaya untuk tombol */
.btn {
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
    text-align: center;
    display: inline-block;
    border: none;
    color: white;
    background-color:rgb(3, 0, 5); /* Warna tombol */
    text-decoration: none;
    margin-top: 10px; /* Jarak atas antar tombol */
    margin-bottom: 10px; /* Jarak bawah antar tombol */
}

/* Gaya saat hover pada tombol */
.btn:hover {
    background-color:rgb(9, 1, 14); /* Warna saat hover */
    transform: scale(1.05);
}

/* Gaya tombol saat aktif */
.btn:active {
    background-color:rgb(4, 1, 7); /* Warna saat tombol diklik */
}

/* Menyesuaikan jarak antara tombol-tombol */
div {
    margin-top: 20px;
}

    /* Responsif untuk perangkat mobile */
    @media (max-width: 768px) {
        .container {
            margin-bottom: 15px;
        }

        .btn-dark {
            width: 100%;
        }
    }
</style>


<body>
    <div class="sticky-top">
        <h3>Form Edit Tamu</h3>
    </div>
    <a href="tampil_tamu_admin.php" class="btn btn-secondary">Batal</a>
    <?php
        require_once '../frontend/koneksi.php';

        // Mengambil Data Dari Tombol Edit
        $id = $_GET['id']; // Mengambil ID dari URL
        $sql = "SELECT * FROM tamu WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
            die('Query prepare failed: ' . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        // Mengambil hasil query
        $query = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_array($query);

        // Mengecek apakah data ditemukan
        if ($data === null) {
            die('Data tidak ditemukan.');
        }
    ?>
    
    <form method="POST" action="proses_edit_tamu.php">
        <div>
            <label hidden>ID</label>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
        </div>
        <div class="container">
            <label>Nama</label>
            <input class="form-control form-control-lg" type="text" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required />
        </div>
        <div class="container">
            <label>Email</label>
            <input class="form-control" aria-label="default input example" type="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required />
        </div>
        <div class="container">
            <label>Pesan</label>
            <textarea class="form-control" placeholder="default input" aria-label="default input example" name="pesan" required><?php echo htmlspecialchars($data['pesan']); ?></textarea>
        </div>
        <input class="btn btn-dark" type="submit" value="Simpan" />
        


    </form>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</body>

</html>
