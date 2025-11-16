<?php
$connection = new mysqli("localhost", "root", "", "web_futsal");

if (isset($_POST['submit'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email    = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $foto     = 'guest.png';

    if (!empty($username) && !empty($email) && !empty($password)) {
        $query = "
            INSERT INTO users (username, email, password, foto) 
            VALUES ('$username', '$email', '$password', '$foto')
        ";

        if (mysqli_query($connection, $query)) {
            header("Location: admin-users.php");
            exit();
        } else {
            echo "Gagal menambah user: " . mysqli_error($connection);
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
    <title>Users Create</title>
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

    <!-- FORM CREATE USER -->
    <div class="create-user-container">
        <div class="left-image">
            <img src="../asset/blur-lapangan.jpg" alt="Soccer Ball">
        </div>

        <div class="right-form">
            <h1>Buat User</h1>

            <form method="POST" action="">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>

                <button type="submit" name="submit" class="btn-buat">Buat</button>
            </form>
        </div>
    </div>

</body>
</html>
