<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to my Laravel-8 course";
        $description = "Created by Narzullo";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung',
            'controllers' => 'Controllers done'
        ];

       
        // Directly in the view
        return view('products.index', [
            'data' => $data
        ]);
    }

    public function about()
    {
        return 'About Us Page';
    }

    public function show($name)
    {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        return view('products.index', [
            'products' => $data[$name] ??   ' Product ' . $name . ' does not exist',
        ]);
    }
}

// Pass data to view   Compact function (creating an array of the variable with its value)
