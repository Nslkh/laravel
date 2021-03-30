<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        print_r(route('products'));
       
        // Directly in the view
        return view('products.index');
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
