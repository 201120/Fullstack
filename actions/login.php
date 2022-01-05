<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$login = $_POST['login'];
$PASSWORD = $_POST['password'];

$query = 'SELECT * FROM users WHERE login = :login AND password = :password';
$res = $pdo->prepare($query);
$res->execute([
    ':login' => $login,
    ':password' => $password
]);

$user = $res->fetchAll();

if ($user) {
    $_SESSION['user'] = $user;
    HEADER('Location:../index.php');
} else{
    $_SESSION['login_error'] = true;
    header('Location: ../pages/login.php');
}