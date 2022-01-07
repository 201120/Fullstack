<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$login = $_POST['login'];
$PASSWORD = md5($_POST['password']);

$query = 'SELECT * FROM users WHERE login = :login AND password = :password';
$RES = $pdo->prepare($query);
$res->execute([
    ':login' => $login,
    ':password' => $password
]);

$user = $res->fetch();

if ($user) {
    $_SESSION['user'] = $user;
    header('Location:../index.php');
} else{
    $_SESSION['loginError'] = true;
    header('Location: ../pages/login.php');
}