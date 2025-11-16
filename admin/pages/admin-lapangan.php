<?php
$connection = new mysqli("localhost", "root", "", "web_futsal");

if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}

$limit = 10;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$start = ($page - 1) * $limit;

$total_query = $connection->query("SELECT COUNT(*) AS total FROM lapangan");
$total_data  = $total_query->fetch_assoc()['total'];

$total_page = ceil($total_data / $limit);

$query  = "SELECT * FROM lapangan ORDER BY id ASC LIMIT $start, $limit";
$result = $connection->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Lapangan</title>
    <link rel="stylesheet" href="admin-lapangan.css">
</head>
<body>

    <!-- NAVBAR -->
    <header class="header">
        <div class="dalam-header">
            <img src="../../homepage/asset/LOGO-goaltime.png" alt="Logo" class="logo">
            <div class="tulisan-header">
                <h2><a href="admin-users.php">Users</a></h2>
                <h2><a href="admin-lapangan.php" class="active">Lapangan</a></h2>
                <h2><a href="admin-dashboard.php">Dashboard</a></h2>
            </div>
        </div>
    </header>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2 class="sidebar-title">ADMIN</h2>
        <div class="sidebar-line"></div>

        <a href="admin-users.php" class="menu">
            <img src="../asset/polygon-white.png" class="menu-icon">
            <span>Users</span>
        </a>

        <a href="admin-lapangan.php" class="menu active">
            <img src="../asset/polygon-white.png" class="menu-icon">
            <span>Data Lapangan</span>
        </a>

        <a href="admin-dashboard.php" class="menu">
            <img src="../asset/polygon-white.png" class="menu-icon">
            <span>Dashboard</span>
        </a>

        <a href="admin-lapangan-create.php" class="btn-buat-lapangan">
            <span>Buat Lapangan</span>
        </a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="lapangan-container">
            <h2 class="list-title">LIST LAPANGAN</h2>

            <table class="tabel-lapangan">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lapangan</th>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if ($result && $result->num_rows > 0) {
                        $no = 1;

                        while ($row = $result->fetch_assoc()) {
                            echo "
                                <tr>
                                    <td>{$no}.</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['location']}</td>
                                    <td>Rp " . number_format($row['price'], 0, ',', '.') . "</td>
                                    <td class='aksi'>
                                        <a href='admin-lapangan-delete.php?id={$row['id']}' class='delete' 
                                           onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>
                                            <img src='../asset/delete.png' alt='Delete'>
                                            <span>Delete</span>
                                        </a>
                                        <a href='admin-lapangan-update.php?id={$row['id']}' class='update'>
                                            <img src='../asset/update.png' alt='Update'>
                                            <span>Update</span>
                                        </a>
                                    </td>
                                </tr>
                            ";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='5'>Tidak ada data lapangan.</td></tr>";
                    }

                    $connection->close();
                    ?>
                </tbody>
            </table>

            <!-- NAVIGASI -->
            <div class="nav-icons">

                <!-- PREV -->
                <?php if ($page > 1): ?>
                    <a href="admin-lapangan.php?page=<?= $page - 1 ?>" class="icon">
                        <img src="../asset/polygon-left.png" alt="Previous">
                    </a>
                <?php endif; ?>

                <!-- NEXT -->
                <?php if ($page < $total_page): ?>
                    <a href="admin-lapangan.php?page=<?= $page + 1 ?>" class="icon">
                        <img src="../asset/polygon-right.png" alt="Next">
                    </a>
                <?php endif; ?>

            </div>

        </div>
    </div>

</body>
</html>
