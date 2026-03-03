<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        require __DIR__ . '/../Views/layouts/main.php';
    }

    public function cartao()
    {
        require __DIR__ . '/../Views/layouts/cartao.php';
    }
}
