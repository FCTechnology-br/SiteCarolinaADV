<?php
require_once __DIR__ . '/../src/bootstrap.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

$controller = new \App\Controllers\HomeController();

if ($uri === '/cartao' || strpos($uri, '/cartao.php') !== false) {
    $controller->cartao();
} else {
    $controller->index();
}
