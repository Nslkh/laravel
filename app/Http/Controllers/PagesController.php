<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $names = ['Ali', 'Aliya', 'Bilal'];
        
        return view('about', [
            'names' => $names
        ]);
    }
}
