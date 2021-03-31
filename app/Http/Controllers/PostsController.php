<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        // Non fluent
        // DB::select('select(['table' => 'posts', 'where' => ['id' => 1]])

        // Fluent
        // DB::table('posts')->where('id', 1)->get();
        
        // $posts = DB::select('select * from posts where id = 3');
        // $posts = DB::select('select * from posts where id = ?', [3]);
        $posts = DB::select('select * from posts where id = :id', ['id' => 3]);
        dd($posts);
    }
}
