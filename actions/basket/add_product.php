<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$productId = $_POST['id'];
$categoryId = $_POST['category_id'];

$_products = $_SERVER['products'] ?? [];

if (isset($products[$productId])) {
    $products[$productId] += 1;
} else {
    $products[$productId] = 1;
}
$_SERVER['products'] = $products;

header("Location: /pages/category.php?id=$categoryId");