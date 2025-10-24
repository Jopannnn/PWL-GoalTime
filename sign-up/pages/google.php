<?php
session_start();

$_SESSION['user'] = [
    'email' => 'googleuser@example.com',
    'username' => 'GoogleUser',
    'login_via' => 'Google'
];

header('Location: ../../homepage/Pages/homepage.php');
exit;
