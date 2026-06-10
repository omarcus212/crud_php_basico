<?php
declare(strict_types=1);

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = new Router();

require_once __DIR__ . '/../router/routes.php';

$route = $_GET['route'] ?? 'products';

$router->dispatch($route);

?>