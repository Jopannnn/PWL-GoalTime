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
    <Header class="header">
        <div class="dalam-header"> 
            <img src="../../homepage/asset/LOGO-goaltime.png" alt="" class="logo">

            <div class="tulisan-header">
               <h2><a href="admin-users.php">Users</a></h2>
               <h2><a href="admin-lapangan.php">Lapangan</a></h2>
               <h2><a href="admin-dashboard.php">Dashboard</a></h2>
            </div>
        </div>
    </Header>
    <!-- ------------------- -->

    <!-- Sidebar -->
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
</div>
    <!-- ------------------- -->   

    <!-- Main Content -->
<div class="main-content">
    <div class="user-container">
        <h2 class="list-title">List Users</h2>
        
        <div class="user-card">
            <img src="../asset/users-andi-muhammad.png" class="user-img">
            <div class="user-info">
                <p><strong>Name :</strong> Andi Muhammad</p>
                <p><strong>Email :</strong> Andi.5462@gmail.com</p>
            </div>
        </div>
        
        <div class="user-card">
            <img src="../asset/users-arya-melati.png" class="user-img">
            <div class="user-info">
                <p><strong>Name :</strong> Arya Melati</p>
                <p><strong>Email :</strong> Arya.6426@gmail.com</p>
            </div>
        </div>
       
        <div class="user-card">
            <img src="../asset/users-asep-wahidin.png" class="user-img">
            <div class="user-info">
                <p><strong>Name :</strong> Asep Wahidin</p>
                <p><strong>Email :</strong> AsepGokil12@gmail.com</p>
            </div>
        </div>
        <div class="nav-icons">
            <img src="../asset/polygon-left.png" class="icon">
            <img src="../asset/polygon-right.png" class="icon">
        </div>
    </div>
</div>



</body>
</html>