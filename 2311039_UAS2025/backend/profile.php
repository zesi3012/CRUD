<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        /* Gaya untuk body */
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }

        /* Gaya untuk h1 */
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
            font-size: 2.5rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Gaya untuk h2 */
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #495057;
            font-size: 1.8rem;
            font-weight: 600;
        }

        /* Gaya untuk tombol "Kembali ke Dashboard" */
        .btn-dashboard {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .btn-dashboard:hover {
            background-color: #0056b3;
            color: #fff;
            text-decoration: none;
            transform: scale(1.05);
        }

        /* Gaya tabel */
        table {
            margin-top: 20px;
        }

        /* Tabel header */
        .table-dark th {
            text-transform: uppercase;
        }
    </style>
</head>
<?php
include "../frontend/koneksi.php";

// Menampilkan data dari database
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);
?>
<body>
    <div class="container">
        <h1>Kelola Admin</h1>
        <div class="text-end mb-3">
            <a href="dashboard.php" class="btn-dashboard">Kembali ke Dashboard</a>
        </div>
        
        <h2>Daftar Semua Admin</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['nama']); ?></td>
                        <td><?php echo htmlspecialchars($row['username']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['password']); ?></td>
                        <td>
                            <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_user.php?id=<?php echo $row['id']; ?>" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
