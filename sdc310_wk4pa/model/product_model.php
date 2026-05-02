<?php
require_once 'db.php';

function getProducts() {
    global $conn;
    $stmt = $conn->query("SELECT * FROM products");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>