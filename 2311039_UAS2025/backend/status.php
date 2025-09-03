<?php
require_once 'koneksi.php';

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check current status before update
    $result = $conn->query("SELECT status FROM tamu WHERE id = $id");
    if ($result) {
        $row = $result->fetch_assoc();
        var_dump($row['status']); // Check current status
    }

    // Prepare and execute the update statement
    $stmt = $conn->prepare("UPDATE tamu SET status = 'terbaca' WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: tampil_tamu_admin.php"); // Redirect back to the main page
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}
?>