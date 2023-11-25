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
        return view('website.home') ;
    }
    public function show1()
    {

        return view('website.productview1');
    }

    public function show2()
    {

        return view('website.productview2');
    }

    public function show3()
    {

        return view('website.productview3');
    }

    public function show4()
    {

        return view('website.productview4');

    }

    public function show5()
    {
        return view('website.productview5');
    }

    public function show6()
    {
        return view('website.productview6');
    }


    public function show7()
    {
        return view('website.productview7');
    }



    public function test_view() {
        return view('mails\contactmail');

    }




    }



