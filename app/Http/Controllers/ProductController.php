<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        // $products = Product::all();
        $products = Product::paginate(10);
        return view("products.index", ['products' => $products]);
    }

    public function create(){
        return view("products.create");
    }

    public function store (Request $request){
        $data = $this->validateProduct($request);
        $newProduct = Product::create($data);
        return redirect(route('products.index'))->with('success', 'Product created successfuly');
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $this->validateProduct($request);
        $product->update($data);
        return redirect(route('products.index'))->with('success', 'Product updated successfuly');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Product deleted successfuly');
    }

    public function view(Product $product){
        return view('products.view', ['product' => $product]);
    }


    private function validateProduct($req){
        return $req->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
    }
}
