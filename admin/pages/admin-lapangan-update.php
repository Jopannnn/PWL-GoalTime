<?php
$connection = new mysqli("localhost", "root", "", "web_futsal");

if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}

/* ===========================
   HANDLE UPDATE DATA (POST)
   =========================== */
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id       = $_POST['id'];
    $name     = $_POST['name'];
    $location = $_POST['location'];
    $price    = $_POST['price'];

    // Validasi
    if (empty($name) || empty($location) || empty($price)) {
        die("Semua field harus diisi!");
    }

    // Prepared Statement (lebih aman)
    $stmt = $connection->prepare("
        UPDATE lapangan 
        SET name = ?, location = ?, price = ?
        WHERE id = ?
    ");
    $stmt->bind_param("ssii", $name, $location, $price, $id);

    if ($stmt->execute()) {
        header("Location: admin-lapangan.php");
        exit();
    } else {
        echo "Gagal update data: " . $stmt->error;
    }

    exit();
}

/* ===========================
   HANDLE GET DATA BY ID
   =========================== */

if (!isset($_GET['id'])) {
    die("ERROR: ID tidak ditemukan di URL.");
}

$id = $_GET['id'];

$stmt = $connection->prepare("SELECT * FROM lapangan WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$lapangan = $result->fetch_assoc();

if (!$lapangan) {
    die("Data lapangan tidak ditemukan untuk ID $id");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Lapangan</title>
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
<!-- END NAVBAR -->

<!-- FORM UPDATE -->
<div class="create-user-container">

    <div class="left-image">
        <img src="../asset/blur-lapangan.jpg" alt="Lapangan">
    </div>

    <div class="right-form">
        <h1>Update Lapangan</h1>

        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $lapangan['id']; ?>">

            <label for="name">Nama Lapangan</label>
            <input type="text" id="name" name="name" 
                   value="<?php echo $lapangan['name']; ?>" required>

            <label for="location">Lokasi</label>
            <input type="text" id="location" name="location" 
                   value="<?php echo $lapangan['location']; ?>" required>

            <label for="price">Harga per Jam</label>
            <input type="number" id="price" name="price" 
                   value="<?php echo $lapangan['price']; ?>" required>

            <button type="submit" name="submit" class="btn-buat">Update</button>
        </form>

    </div>
</div>

</body>
</html>
