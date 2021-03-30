<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to my Laravel-8 course";
        return view('products.index', compact('title'));
    }

    public function about()
    {
        return 'About Us Page';
    }
}

// Pass data to view   Compact function (creating an array of the variable with its value)
