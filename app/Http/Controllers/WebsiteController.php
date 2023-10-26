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

    public function index(){
        $products = Product::all();
        return view('website.home1')->with(["products" => $products]);
    }
    public function product1()
    {
        $products = Product::all();
        return view('website.product1')->with(["products" => $products]);
    }
    public function product2()
     {
        return view('website.product2');
    }
    public function product3()
     {
        return view('website.product3');
    }
    public function product4()
    {
        return view('website.product4');
    }
    public function product5()
    {
        return view('website.product5');
    }
    public function product6()
    {
        return view('website.product6');
    }
    }



