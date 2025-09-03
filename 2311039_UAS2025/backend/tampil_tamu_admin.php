<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Buku Tamu Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            padding-top: 20px;
        }

        .back-button {
            background-color: #007bff;
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .table thead {
            background-color: #343a40; /* Dark background color */
            color: white;
        }

        .actions button {
            margin-left: 5px;
        }

        .card-footer {
            font-size: 1rem;
            color: #4a4a4a;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="dashboard.php" class="back-button">Kembali ke Dashboard</a>
        <h3 class="text-center mb-4">Data Buku Tamu</h3>

        <?php
            require_once '../frontend/koneksi.php';

            if (isset($_POST['tandai_terbaca'])) {
                $id = $_POST['id'];
                $update_sql = "UPDATE tamu SET status='dibaca' WHERE id='$id'";
                mysqli_query($conn, $update_sql);
            }

            $sql = "SELECT * FROM tamu ORDER BY id";
            $query = mysqli_query($conn, $sql);
            $total = mysqli_num_rows($query);
        ?>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['pesan']; ?></td>
                        <td><?php echo $data['status'] == 'dibaca' ? 'Dibaca' : 'Belum Dibaca'; ?></td>
                        <td class="actions">
                            <form method='POST' style='display:inline;'>
                                <input type='hidden' name='id' value='<?php echo $data['id']; ?>'>
                                <button type='submit' name='tandai_terbaca' class="btn btn-dark btn-sm">Tandai Dibaca</button>
                            </form>
                            <a href="edit_tamu.php?id=<?php echo $data['id']; ?>" class="btn btn-dark btn-sm">Edit</a>
                            <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-dark btn-sm" onclick="return confirm('Yakin Akan Menghapus Pesan Ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <p>Jumlah Tamu: <?php echo $total; ?></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
