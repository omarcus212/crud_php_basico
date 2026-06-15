<?php

namespace App\Models;

class Product
{
    private string $path = __DIR__ .'/../../storage/products.json';
    public array $products;

    public function __construct($products = [])
    {
        $this->products = $products;
      
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

    public function save(): bool
    {

     $products = $this->all();

     $newID = 1;

     if(!empty($products)){

        $lastID = 0;

        foreach($products as $product){

            if(isset($product['id']) && $product['id'] > $lastID){
                $lastID = $product['id'];
            }
            
        }

        $newID = $lastID + 1;
     }

     $this->products['id'] = $newID;

     $products[] = $this->products;

     $jsonString = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
     
     return file_put_contents($this->path, $jsonString) !== false;

    }

    public function getId(int $id)
    {
        $products = $this->all();

        foreach($products as $product){
           if($product['id'] == $id){
            return $product;
           }
        }
      
        return null;
    }

    public function update(int $id): bool
    {
        $products = $this->all();
        $updated = false;

        foreach ($products as &$product) {
            if ($product['id'] === $id) {
                $this->products['id'] = $id;
                $product = $this->products;
                $updated = true;
                break;
            }
        }

        if ($updated) {
            $jsonString = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return file_put_contents($this->path, $jsonString) !== false;
        }

        return false;
    }

    public function destroy(int $id): bool
    {
        $found = false;
        $products = $this->all();

        foreach ($products as $key => $product) {
        if ($product['id'] === $id) {
           unset($products[$key]);
            $found = true;
            break;
           }
       }

        if ($found) {
            $jsonString = json_encode(array_values($products), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return file_put_contents($this->path, $jsonString) !== false;
        }
 
       return $found;

    }
}