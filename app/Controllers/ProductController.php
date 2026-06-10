<?php 

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index(): void
    
    {
        $product = new Product();

        $products = $product->all();

        require __DIR__ . '/../Views/products/index.php';
    }
}
?>