<?php
$title = 'Категория';
require_once '../templates/header.php';

$categoryId = $_GET['id'];

$query = "SELECT * FROM categories WHERE id = :categoryId";
$res = $pdo->prepare($query);
$res->execute([
    ':categoryId' => $categoryId,
]);
$category = $res->fetch();


$query = "SELECT * FROM products WHERE category_id = :categoryId";
$res = $pdo->prepare($query);
$res->execute([
    ':categoryId' => $categoryId,
]);
$products = $res->fetchAll();

$cards = '';
foreach ($products as $product){
    $cards .=
    "
    <div class='col-3 mb-2'>
        <div class='card' style='width: 18rem;'>
        <div class='card-image text-center'>
        <img src='/images/products/{$product['picture']}' class='card-img-top' alt='...'>
        </div>
            <div class='card-body'>
                <h5 class='card-title'>
                    {$product['name']}
                </h5>
                <p class='card-text'>
                    {$product['description']}
                </p>
                <div class='card-price'>
                    {$product['price']}
                </div>
                <div class='card-basket-buttons'>
                <form action='/actions/basket/remove_product.php' method='post'>
                <input hidden value='{$product['id']}'>
                <button class='btn btn-product-remove btn-danger'>-</button>
                </form>
                </div>
                <div>
                <form action='/actions/basket/add_product.php' method='post'>
                <input hidden value='{$product['id']}'>
                <button class='btn btn-product-add btn-success'>+</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    ";
}

?>

<h1>
    <?= $category['name'] ?>
</h1>

<h4>
    <?= $category['description'] ?>
</h4>

<div class='row'>
    <?=$cards ?>
</div>

<?php

require_once '../templates/footer.php';