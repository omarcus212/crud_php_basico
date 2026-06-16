<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

session_start(); // Inicia a sessão PHP

use App\Controllers\ProductController;

$route = $_GET['route'] ?? 'products';

$controller = new ProductController();

switch ($route) {

    case 'products':
        $controller->index();
        break;
    
    case 'products/create':
        $controller->create();
        break;
    
    case 'products/store':
        $controller->store($_POST);
        break;

    case 'products/edit':
        $controller->edit($_GET['id']);
        break;

    case 'products/update':
        $controller->update($_GET['id'], $_POST);
        break;

    case 'products/delete':
        $controller->destroy($_GET['id']);
        break;

    default:
        http_response_code(404);
        echo '404 - Página não encontrada';
        break;
}