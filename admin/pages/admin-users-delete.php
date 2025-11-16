<?php
$connection = new mysqli("localhost", "root", "", "web_futsal");

if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan!");
}

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = '$id'";

if (mysqli_query($connection, $query)) {
    header("Location: admin-users.php");
    exit();
} else {
    echo "Gagal menghapus data: " . mysqli_error($connection);
}
?>
