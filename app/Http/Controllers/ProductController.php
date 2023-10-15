<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('backend.products.list')->with(["products" => $products]);
    }

    public function create(){
        return view('backend.products.new');
    }


    public function store(){
        $product = new Product();
        $product->name = request('name');
        $product->save();
        return redirect()->route('backend.products.list');
    }

    public function show($id){
        $product = Product::find($id);
        return view('backend.products.view')->with(["product" => $product]);
    }

    public function edit($id){
        $product = Product::find($id);
        return view('backend.products.edit')->with(["product" => $product]);
    }

    public function update($id){
        $product = Product::find($id);
        $product->name = request('name');
        $product->description = request('description');
        $product->save();
        return redirect()->route('backend.products.list');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('backend.products.list');
    }
}

