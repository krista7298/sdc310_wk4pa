<?php
require_once __DIR__ . '/../model/product_model.php';

$products = getProducts();

require_once __DIR__ . '/../view/display_products.php';
?>