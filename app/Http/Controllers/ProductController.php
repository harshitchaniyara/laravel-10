<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Arr;

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
        Product::create(Arr::except($request->all(), ['_token']));
        return redirect()->back();
    }

    public function edit($id){
        $products = Product::find($id);
        return view('product.edit',compact('products'));
    }

    public function update(Request $request, $id){
        Product::where('id', $id)->update(Arr::except($request->all(), ['_token']));
        return redirect()->route('product.index')->with('success', 'Record updated successfully!');
    }

    public function delete($id){
        Product::destroy($id);
        return redirect()->back();
    }
}
