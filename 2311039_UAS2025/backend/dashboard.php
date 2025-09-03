<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .sidebar {
            width: 250px;
            height: 100%;
            background-color:rgb(49, 48, 49);
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 30px;
            color: white;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            margin: 10px 0;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color:rgb(126, 122, 128);
        }

        .content {
            margin-left: 270px;
            padding: 20px;
        }

        .header {
            background-color:rgb(11, 6, 14);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
        }

        .card {
            margin: 20px 0;
        }

        .card-body {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2 class="text-center">Dashboard</h2>
    <a href="profile_user.php">Profil User</a>
    <a href="data_pengguna.php">Data Pengguna</a>
    <a href="tampil_tamu_admin.php">Kelola Pesan</a>
    <a href="profile.php">Data Admin</a>
    <a href="data.php">Kelola Data Kebutuhan Usaha</a>
    <a href="index.php">Logout</a>
</div>

<div class="content">
    <div class="header">
        <h1>Welcome to Admin Dashboard</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Profil User</h5>
            <p>Manage and view the list of all registered users.</p>
            <a href="profile_user.php" class="btn btn-dark">Go to Profile User</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Pengguna</h5>
            <p>Manage and view the list of all registered users.</p>
            <a href="data_pengguna.php" class="btn btn-dark">Go to Data Pengguna</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kelola Pesan</h5>
            <p>View and manage messages from users who have visited the site.</p>
            <a href="tampil_tamu_admin.php" class="btn btn-dark">Go to Kelola Pesan</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Admin</h5>
            <p>View and edit your personal profile details.</p>
            <a href="profile.php" class="btn btn-dark">Go to Data Admin</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kelola Data Kebutuhan Usaha</h5>
            <p>Manage your business requirements and update necessary data.</p>
            <a href="data.php" class="btn btn-dark">Go to Kelola Data Kebutuhan Usaha</a>
        </div>
    </div>
</div>

<body>
    <script scr="../js/bootstrap.min.js"></script>
    <script scr=../js/jquery.min.js"></script>
  </body>
</body>
</html>
