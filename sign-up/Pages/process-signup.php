<?php
require_once '../../db-connect/koneksi.php';
session_start();

if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];

    if ($password !== $confirm) {
        echo "
        <script>
            alert('Konfirmasi password tidak cocok!');
            window.location.href = '../sign-up.php';
        </script>
        ";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users_login (email, password) VALUES (?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('ss', $email, $hashedPassword);

    if ($stmt->execute()) {
        header('Location: ../../Login/Pages/login.php');
        exit;
    } else {
        echo "
        <script>
            alert('Gagal sign up! Email mungkin sudah digunakan.');
            window.location.href = '../sign-up.php';
        </script>
        ";
    }

    $stmt->close();
    $connection->close();
}
?>
