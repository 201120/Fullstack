<?php
session_start();
$user = 'root';
$password = '';
$pdo = new Pdo('mysql:dbname=fullstack2;host=127.0.0.1;port=3306' , $user, $password);
?>