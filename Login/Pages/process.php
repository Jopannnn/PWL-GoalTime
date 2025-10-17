<?php
require_once '../../db-connect/koneksi.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users_login WHERE email = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            session_regenerate_id(true);
            $_SESSION['user'] = $user;

            header('Location: ../../homepage/Pages/homepage-setelah-login.php');
            exit;
        } else {
            echo "
            <script>
                alert('Password salah!');
                window.location.href = '../../Login/Pages/login.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
            alert('Email tidak ditemukan!');
            window.location.href = '../../Login/Pages/login.php';
        </script>
        ";
    }

    $stmt->close();
    $connection->close();
}
?>
