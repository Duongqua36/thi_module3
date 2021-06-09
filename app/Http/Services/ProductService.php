<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use Illuminate\Support\Facades\Request;

class ProductService extends BaseService
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepo = $productRepository;

    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }

    public function store(Request $request)
    {
        $products = $this->productRepo->getInstance();
        $products->fill($request->all());
        //  toastr()->success('them du lieu thanh cong');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('img', 'public');
            $products->image = $path;
        }
    }
}
