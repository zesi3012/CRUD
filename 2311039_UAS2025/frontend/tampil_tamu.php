<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Tamu Pengguna</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        /* Tampilan umum */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f8; /* Latar belakang yang lebih ringan */
            color: #5f6368; /* Teks abu-abu lembut */
            margin: 0;
            padding: 0;
        }

        /* Header Sticky dengan animasi */
        .sticky-top {
            background-color: #6a4f7d; /* Warna ungu kalem */
            color: #fff;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            animation: slideIn 1s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }

        .sticky-top h3 {
            font-size: 26px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        /* Tabel dengan desain modern */
        .table {
            width: 90%;
            margin: 30px auto;
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .table:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .table th {
            background-color: #6a4f7d;
            color: #fff;
            padding: 15px;
            text-transform: uppercase;
            font-size: 14px;
        }

        .table td {
            padding: 15px;
            font-size: 16px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #3a3a3a;
        }

        .table tr:nth-child(even) {
            background-color: #f7f7f7;
        }

        .table tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }

        /* Tombol Kembali */
        .fixed-bottom {
            padding: 15px;
            text-align: center;
        }

        .fixed-bottom a {
            padding: 12px 20px;
            background-color: #6a4f7d;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: 14px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .fixed-bottom a:hover {
            background-color: #5a3c62;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
        }

        /* Responsif */
        @media (max-width: 768px) {
            .table th,
            .table td {
                font-size: 14px;
                padding: 10px;
            }

            .sticky-top h3 {
                font-size: 22px;
            }

            .table {
                width: 95%;
            }

            .fixed-bottom a {
                font-size: 13px;
                padding: 10px 18px;
            }
        }
    </style>
</head>

<body>
    <?php
    require_once 'koneksi.php';
    $sql = "SELECT * FROM tamu ORDER BY id";
    $query = mysqli_query($conn, $sql);
    ?>
    
    <!-- Header Sticky -->
    <div class="sticky-top">
        <h3>Tampil Tamu Pengguna</h3>
    </div>

    <!-- Tabel Pengguna -->
    <div class="container-sm">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['pesan']; ?></td>
                        <td><?php echo $data['status'] == 'dibaca' ? 'Dibaca' : 'Belum Dibaca'; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Tombol Kembali -->
    <div class="fixed-bottom">
        <a href="contact.php">Kembali</a>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</body>

</html>
