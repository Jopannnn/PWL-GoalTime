<?php
$connection = new mysqli("localhost", "root", "", "web_futsal");

if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id       = $_POST['id'];
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        die("Semua field harus diisi!");
    }

    $update = "
        UPDATE users 
        SET username='$username', email='$email', password='$password' 
        WHERE id='$id'
    ";

    if (mysqli_query($connection, $update)) {
        header("Location: admin-users.php");
        exit();
    } else {
        echo "Gagal update data: " . mysqli_error($connection);
    }
    exit();
}

if (!isset($_GET['id'])) {
    die("ERROR: ID tidak ditemukan di URL");
}

$id    = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM users WHERE id='$id'");
$user  = mysqli_fetch_assoc($query);

if (!$user) {
    die("Data user tidak ditemukan untuk ID $id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="admin-users.css">
</head>
<body>

    <div class="create-user-container">
        <div class="left-image">
            <img src="../asset/blur-lapangan.jpg" alt="Soccer Ball">
        </div>

        <div class="right-form">
            <h1>Edit User</h1>

            <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">

                <label for="username">Username</label>
                <input type="text" id="username" name="username"
                       value="<?= htmlspecialchars($user['username']) ?>">

                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                       value="<?= htmlspecialchars($user['email']) ?>">

                <label for="password">Password</label>
                <input type="text" id="password" name="password"
                       value="<?= htmlspecialchars($user['password']) ?>">

                <button type="submit" class="btn-buat" style="background-color:#FF6F00; color:white;">
                    Update
                </button>
            </form>
        </div>
    </div>

</body>
</html>
