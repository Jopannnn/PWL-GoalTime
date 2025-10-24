<?php
session_start();

$_SESSION['user'] = [
    'email' => 'fbuser@example.com',
    'username' => 'FBUser',
    'login_via' => 'Facebook'
];

header('Location: ../../homepage/Pages/homepage.php');
exit;
