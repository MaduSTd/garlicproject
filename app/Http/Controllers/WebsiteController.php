<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home() {
        return view('website.home');
    }

    public function about() {
        return view('website.about');
    }

    public function contact() {
        return view('website.contact');
    }

    public function index() {
        $products = Product::all();
        return view('website.home1')->with(["products" => $products]);
    }
    public function show($id)
    {

        $product = Product::find($id);
        return view('website.productView')->with(["product" => $product]);
    }


    }



