<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->id =1;
        $product->name='Cà phê chồn';
        $product->price=150000;
        $product->image="";
        $product->origin='cà phê';
        $product->save();
    }
}
