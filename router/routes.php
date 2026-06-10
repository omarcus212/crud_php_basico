<?php

use App\Controllers\ProductController;

$router->get('products', [ProductController::class, 'index']);