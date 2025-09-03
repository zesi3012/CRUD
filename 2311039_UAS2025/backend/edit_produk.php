<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

include('../frontend/koneksi.php'); // Menghubungkan ke database

// Mengambil id produk dari URL
$id = $_GET['id'];

// Ambil data produk berdasarkan id
$sql = "SELECT * FROM product WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

// Jika data produk tidak ditemukan
if (!$product) {
    echo "Produk tidak ditemukan!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data form
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // Update data produk
    $updateSql = "UPDATE product SET nama = ?, deskripsi = ?, harga = ?, stok = ? WHERE id = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("ssiii", $nama, $deskripsi, $harga, $stok, $id);

    if ($updateStmt->execute()) {
        echo "Produk berhasil diperbarui!";
    } else {
        echo "Gagal memperbarui produk!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Produk</h2>
        <form action="edit_produk.php?id=<?php echo $product['id']; ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama Produk:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo htmlspecialchars($product['nama']); ?>" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required><?php echo htmlspecialchars($product['deskripsi']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $product['harga']; ?>" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $product['stok']; ?>" required>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="data.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>