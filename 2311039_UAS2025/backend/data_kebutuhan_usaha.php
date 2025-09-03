<?php include '../frontend/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smoothies</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        table {
            margin-top: 20px;
        }

        .table thead th {
            background-color: #f8f9fa;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            margin-right: 5px;
        }

        .actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Daftar Produk Smoothies</h1>
        <div class="text-end mb-3">
            <a href="add.php" class="btn btn-primary">Tambah Produk</a>
            <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM produk";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        // Menentukan status saat ini
                        $status = ($row['status'] == 1) ? 'Tersedia' : 'Tidak Tersedia';
                        $status_value = $row['status']; // Untuk nilai yang akan diupdate

                        echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['name']}</td>
                            <td>Rp " . number_format($row['price'], 0, ',', '.') . "</td>
                            <td>
                                <form action='status_produk.php' method='POST'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <select name='status' class='form-select' onchange='this.form.submit()'>
                                        <option value='1' " . ($status_value == 1 ? 'selected' : '') . ">Tersedia</option>
                                        <option value='0' " . ($status_value == 0 ? 'selected' : '') . ">Tidak Tersedia</option>
                                    </select>
                                </form>
                            </td>
                            <td class='actions'>
                                <a href='edit_kebutuhan.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete_kebutuhan.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                            </td>
                        </tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
