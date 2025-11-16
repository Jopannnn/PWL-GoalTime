<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
    <link rel="stylesheet" href="admin-dashboard.css">
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

        <a href="admin-users.php" class="menu">
            <img src="../asset/polygon-white.png" class="menu-icon">
            <span>Users</span>
        </a>

        <a href="admin-lapangan.php" class="menu">
            <img src="../asset/polygon-white.png" class="menu-icon">
            <span>Data Lapangan</span>
        </a>

        <a href="admin-dashboard.php" class="menu active">
            <img src="../asset/polygon-white.png" class="menu-icon">
            <span>Dashboard</span>
        </a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="dashboard-container">
        <div class="dashboard-content"> <!-- center wrapper -->

            <h1 class="dash-title">DASHBOARD</h1>

            <div class="stats-wrapper">
                <div class="stat-card"><p>Total Lapangan</p> <h2>12</h2></div>
                <div class="stat-card"><p>Lapangan Tersedia</p> <h2>9</h2></div>
                <div class="stat-card"><p>Dalam Perbaikan</p> <h2>2</h2></div>
                <div class="stat-card"><p>Sedang Disewa</p> <h2>1</h2></div>
            </div>

            <h2 class="schedule-title">Jadwal Penyewaan Hari Ini</h2>

            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Jam</th>
                        <th>Nama</th>
                        <th>Lapangan</th>
                        <th>Durasi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>8.00</td><td>Ahmat Subhan</td><td>Futsal Corner Bekasi</td><td>1 jam</td><td class="status booked">Booked</td></tr>
                    <tr><td>9.00</td><td>Yendi Rahman</td><td>Danau Cintarum</td><td>1 jam</td><td class="status booked">Booked</td></tr>
                    <tr><td>10.00</td><td>Khairul Anwar</td><td>Futsal Kebon Jeruk</td><td>2 jam</td><td class="status booked">Booked</td></tr>
                    <tr><td>11.00</td><td>Sri Heryanti</td><td>Futsal Limbad</td><td>1 jam</td><td class="status booked">Booked</td></tr>
                    <tr><td>12.00</td><td>Ika Listi Anah</td><td>Generasi Lama</td><td>2 jam</td><td class="status booked">Booked</td></tr>
                </tbody>
            </table>

        </div>
    </div>

</body>
</html>
