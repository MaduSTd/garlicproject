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

    public function store(Request $request){

        /* Uploading Profile Picture */
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = date("Y-m-d-h-i-s") . "-" . str_replace(" ", "-", strtolower(request('name'))) . "." . $ext;
        $location = "/public/products/";
        $image->storeAs($location, $filename);
        /* Uploading Profile Picture */

        $product = new Product();
        $product->name = request('name');
        $product->description = request('description');
        $product->save();

        $product->images()->create(['image' => $filename]);
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

    public function update(Request $request , $id){
        $product = Product::find($id);
        $product->name = request('name');
        $product->description = request('description');

        $product->images()->delete();

        /* Editing Profile Picture */
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = date("Y-m-d-h-i-s") . "-" . str_replace(" ", "-", strtolower(request('name'))) . "." . $ext;
        $location = "/public/products/";
        $image->storeAs($location, $filename);
        /* Editing Profile Picture */

        $product->images()->create(['image' => $filename]);
        $product->update();
        return redirect()->route('backend.products.list');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('backend.products.list');
    }
}

