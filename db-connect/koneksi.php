<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "web_futsal";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}

?>