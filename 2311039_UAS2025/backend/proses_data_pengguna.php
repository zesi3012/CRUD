<?php


include "../frontend/koneksi.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: profile.php");
    exit();
}

$servername = "localhost";
$username = "username"; // Ganti dengan username database Anda
$password = "password"; // Ganti dengan password database Anda
$dbname = "2311039_uas2025";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data pengguna berdasarkan ID
$user_id = $_SESSION['user_id']; 
$stmt = $conn->prepare("SELECT * FROM user WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$username = "";
$email = "";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
} else {
    echo "Data pengguna tidak ditemukan.";
}

// Ambil semua data untuk ditampilkan di tabel
$sql_all_users = "SELECT id, nama, username, email, password FROM user";
$result_all_users = $conn->query($sql_all_users);

$conn->close();
?>

