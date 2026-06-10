<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\ProductController;

$route = $_GET['route'] ?? 'products';

$controller = new ProductController();

switch ($route) {

    case 'products':
        $controller->index();
        break;

    default:
        http_response_code(404);
        echo '404 - Página não encontrada';
        break;
}