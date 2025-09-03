<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            background-color: white;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color:rgb(2, 0, 3);
            font-weight: bold;
        }

        .btn-dashboard {
            padding: 10px 20px;
            border-radius: 30px;
            background-color:rgb(2, 1, 3);
            color: white;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-dashboard:hover {
            background-color:rgb(8, 1, 10);
        }

        .alert {
            padding: 15px;
            font-size: 1.1rem;
            border-radius: 10px;
        }

        .table th, .table td {
            text-align: center;
        }

        .table img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
        }

        .table thead {
            background-color:rgb(9, 3, 12);
            color: white;
        }

        .table-bordered {
            border: 2px solid #ddd;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
        }

        .form-group label {
            font-weight: bold;
        }

        .text-end {
            margin-bottom: 20px;
        }

    </style>
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
        exit;
    }
    include '../frontend/koneksi.php';

    // Cek koneksi database
    if (!$conn) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
    ?>

    <div class="container mt-5">
        <h2>Tambah Produk Baru</h2>
        <div class="text-end mb-3">
            <a href="dashboard.php" class="btn-dashboard">Kembali ke Dashboard</a>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = mysqli_real_escape_string($conn, $_POST['nama']);
            $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
            $harga = mysqli_real_escape_string($conn, $_POST['harga']);
            $stok = mysqli_real_escape_string($conn, $_POST['stok']);
            $foto = $_FILES['foto']['name'];
            $target = "../frontend/foto/" . basename($foto);

            // Query untuk menambahkan produk
            $query = "INSERT INTO product (nama, deskripsi, harga, stok, foto) VALUES ('$nama', '$deskripsi', '$harga', '$stok', '$foto')";

            if (mysqli_query($conn, $query)) {
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
                    $message = "Produk berhasil ditambahkan.";
                } else {
                    $message = "Produk ditambahkan, tetapi gagal mengunggah foto.";
                }
            } else {
                $message = "Gagal menambahkan produk: " . mysqli_error($conn);
            }
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Produk:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto Produk:</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
            </div>
            <button type="submit" class="btn btn-dark btn-block mt-3">Tambah Produk</button>
        </form>

        <div id="responseMessage" class="mt-3">
            <?php
            if (isset($message)) {
                echo "<div class='alert alert-info'>$message</div>";
            }
            ?>
        </div>

        <h2 class="mt-5">Daftar Produk</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM product";
                $result = mysqli_query($conn, $query);
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['deskripsi']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['harga']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['stok']) . "</td>";
                    echo "<td><img src='../frontend/foto/" . htmlspecialchars($row['foto']) . "' alt='Foto Produk'></td>";
                    echo "<td>";
                    echo "<a href='edit_produk.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                    echo "<a href='delete_produk.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
