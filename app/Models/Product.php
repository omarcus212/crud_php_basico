<?php

namespace App\Models;

class Product
{
    private string $path;

    public function __construct()
    {
        $this->path =
            __DIR__ .
            '/../../storage/products.json';
    }

    public function all()
    {
        echo "salvar dado no json/model";
    }
}