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

    public function all(): array
    {
        if (!file_exists($this->path)) {
            return [];
        }

        $jsonData = file_get_contents($this->path);
        $products = json_decode($jsonData, true);

        return $products ?? [];
    }
}