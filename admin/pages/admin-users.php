<?php
$connection = new mysqli("localhost", "root", "", "web_futsal");

$limit = 3;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($page - 1) * $limit;

$total_result = mysqli_query($connection, "SELECT COUNT(*) AS total FROM users");
$total_row = mysqli_fetch_assoc($total_result);
$total_users = $total_row['total'];

$total_pages = ceil($total_users / $limit);

$query = mysqli_query($connection, "SELECT * FROM users LIMIT $limit OFFSET $offset");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin-users.css">
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

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2 class="sidebar-title">ADMIN</h2>
        <div class="sidebar-line"></div>

        <a href="admin-users.php" class="menu active">
            <img src="../asset/polygon-white.png" class="menu-icon">
            <span>Users</span>
        </a>

        <a href="admin-lapangan.php" class="menu">
            <img src="../asset/polygon-white.png" class="menu-icon">
            <span>Data Lapangan</span>
        </a>

        <a href="admin-dashboard.php" class="menu">
            <img src="../asset/polygon-white.png" class="menu-icon">
            <span>Dashboard</span>
        </a>

        <a href="admin-users-create.php" class="btn-buat-user">
            <span>Buat User</span>
        </a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="user-container">
            <h2 class="list-title">List Users</h2>

            <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                <div class="user-card">
                    <img src="../asset/<?= $row['foto'] ?: 'guest.png' ?>" class="user-img">
                    
                    <div class="user-info">
                        <p><strong>Name :</strong> <?= htmlspecialchars($row['username']) ?></p>
                        <p><strong>Email :</strong> <?= htmlspecialchars($row['email']) ?></p>
                    </div>

                    <div class="user-actions-box">
                        <div class="user-actions">

                            <div class="icon-wrapper">
                                <a href="admin-users-delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus user ini?');">
                                    <img src="../asset/delete.png" class="action-icon" alt="Delete">
                                </a>
                                <span class="delete-icon">Delete</span>
                            </div>

                            <div class="icon-wrapper">
                                <a href="admin-users-update.php?id=<?= $row['id'] ?>">
                                    <img src="../asset/update.png" class="action-icon" alt="Update">
                                </a>
                                <span class="update-icon">Update</span>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            <!-- PAGINATION -->
            <div class="nav-icons">

                <!-- Tombol kiri -->
                <?php if ($page > 1): ?>
                    <a href="?page=<?= $page - 1 ?>">
                        <img src="../asset/polygon-left.png" class="icon" alt="Prev">
                    </a>
                <?php else: ?>
                    <img src="../asset/polygon-left.png" class="icon disabled" alt="Prev">
                <?php endif; ?>

                <!-- Tombol kanan -->
                <?php if ($page < $total_pages): ?>
                    <a href="?page=<?= $page + 1 ?>">
                        <img src="../asset/polygon-right.png" class="icon" alt="Next">
                    </a>
                <?php else: ?>
                    <img src="../asset/polygon-right.png" class="icon disabled" alt="Next">
                <?php endif; ?>

            </div>
        </div>
    </div>

</body>
</html>
