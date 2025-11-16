<?php
$connection = new mysqli("localhost", "root", "", "web_futsal");

if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}

if (isset($_POST['submit'])) {

    $name     = $_POST['name'] ?? '';
    $location = $_POST['location'] ?? '';
    $price    = $_POST['price'] ?? '';

    if (!empty($name) && !empty($location) && !empty($price)) {

        $stmt = $connection->prepare("
            INSERT INTO lapangan (name, location, price)
            VALUES (?, ?, ?)
        ");
        $stmt->bind_param("ssi", $name, $location, $price);

        if ($stmt->execute()) {
            header("Location: admin-lapangan.php");
            exit();
        } else {
            echo "Gagal menambah lapangan: " . $stmt->error;
        }

    } else {
        echo "Semua field harus diisi!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Lapangan</title>
    <link rel="stylesheet" href="admin-lapangan.css">
</head>
<body>

<!-- NAVBAR -->
<header class="header">
    <div class="dalam-header"> 
        <img src="../../homepage/asset/LOGO-goaltime.png" alt="" class="logo">

        <div class="tulisan-header">
            <h2><a href="admin-users.php">Users</a></h2>
            <h2><a href="admin-lapangan.php">Lapangan</a></h2>
            <h2><a href="admin-dashboard.php">Dashboard</a></h2>
        </div>
    </div>
</header>

<!-- FORM CREATE LAPANGAN -->
<div class="create-user-container">
    <div class="left-image">
        <img src="../asset/blur-lapangan.jpg" alt="Lapangan">
    </div>

    <div class="right-form">
        <h1>Buat Lapangan</h1>

        <form method="POST" action="">
            <label for="name">Nama Lapangan</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama lapangan" required>

            <label for="location">Lokasi</label>
            <input type="text" id="location" name="location" placeholder="Masukkan lokasi" required>

            <label for="price">Harga per Jam</label>
            <input type="number" id="price" name="price" placeholder="Masukkan harga" required>

            <button type="submit" name="submit" class="btn-buat">Buat</button>
        </form>
    </div>
</div>

</body>
</html>
