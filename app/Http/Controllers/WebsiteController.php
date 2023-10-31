<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function about() {
        return view('website.about');
    }

    public function contact() {
        return view('website.contact');
    }

    public function index() {
        $products = Product::all();
        return view('website.home')->with(["products" => $products]);
    }
    public function show1()
    {

        $product = Product::all();
        return view('website.productView1');
    }

    public function show2()
    {

        $product = Product::all();
        return view('website.productView2');
    }

    public function show3()
    {

        $product = Product::all();
        return view('website.productView3');
    }

    public function show4()
    {

        $product = Product::all();
        return view('website.productView4');

    }

    public function show5()
    {

        $product = Product::all();
        return view('website.productView5');
    }

    public function show6()
    {

        $product = Product::all();
        return view('website.productView6');
    }


    public function show7()
    {

        $product = Product::all();
        return view('website.productView7');
    }


    }



