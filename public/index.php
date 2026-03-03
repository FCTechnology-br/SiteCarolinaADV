<?php
require_once __DIR__ . '/../src/bootstrap.php';
$controller = new \App\Controllers\HomeController();
$controller->index();
