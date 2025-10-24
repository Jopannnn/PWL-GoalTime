<?php
require_once '../../db-connect/koneksi.php';
session_start();

$stmt = null; 

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            session_regenerate_id(true);

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['username'];

            header('Location: ../../homepage/Pages/homepage.php');
            exit;
        } else {
            echo "
            <script>
                alert('Password salah!');
                window.location.href = '../login.php';
            </script>";
            exit;
        }
    } else {
        echo "
        <script>
            alert('Email tidak ditemukan!');
            window.location.href = '../login.php';
        </script>";
        exit;
    }
}

if ($stmt) {
    $stmt->close();
}
$connection->close();
?>
