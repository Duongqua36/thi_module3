<?php


namespace App\Http\Repositories;


use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductRepository extends Repository
{
    public function getAll()
    {
        return Product::all();
    }

    public function getInstance()
    {
        return new Product();
    }

    public function store($product)
    {
        $product->save();
    }
}
