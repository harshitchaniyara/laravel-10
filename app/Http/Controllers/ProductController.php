<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('welcome',compact('products'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        // dd($request->all());

        $product = $request->all();

        Product::create(['code' => $product['code'], 'name' => $product['name'], 'category' => $product['category'], 'size' => $product['size'], 'price' => $product['price'], 'description' => $product['description']]);
        return redirect()->back();
    }

    public function delete($id){
        Product::destroy($id);
        return redirect()->back();
    }
}
