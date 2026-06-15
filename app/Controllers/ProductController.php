<?php 

namespace App\Controllers;

use App\Models\Product;
use App\Core\BaseController;

class ProductController extends BaseController
{
    public function index(): void
    
    {
        $product = new Product();

        $products = $product->all();

        require __DIR__ . '/../Views/products/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../Views/products/create.php';
    }

    public function store(array $body): void
    {
        $product = new Product();

        $product->products = $body;

        if($product->save()){
            
            $_SESSION['success'] = 'Produto cadastrado com sucesso!';
            $this->redirect('products');

        }else{
            
            $this->create();
        }
           
    }


    public function edit(string $id): void
    {

        $id = (int) $id;

        $product = new Product();

        $product = $product->getId($id);

        require_once __DIR__ . '/../Views/products/edit.php';
    }

    public function update(string $id, array $body): void
    {

        $id = (int) $id;

        $product = new Product();

        $product->products = $body;
        
        $product->update($id);

        $this->redirect('products');

    }

    public function destroy(string $id): void
    {

        $id = (int) $id;

        $product = new Product();

        $product->destroy($id);

        $this->redirect('products');

    }   
}
?>