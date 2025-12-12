<?php
namespace App\Controllers;

use App\Models\Product;
use Database;

class ProductController {
    public function index() {

        $db = new Database();
        $conn = $db->connect();

        $productModel = new Product($conn);

        $products = $productModel->getAll();

        require __DIR__ . '/../Views/product.php';
    }
}
