<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Illuminate\Support\Facades\Request;
class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        return view('product.list', compact('products'));
    }

    public function add()
    {
        return view('product.add');
    }
    public function store(Request $request)
    {
        $this->productService->store($request);
        return redirect()->route('product.list');
    }
}
