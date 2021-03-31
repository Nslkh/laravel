<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class PostsController extends Controller
{
    public function index()
    {
        $id = 3;

        // $posts = DB::table('posts')
        // ->where('id', $id)
        // ->get();

        
        // $posts = DB::table('posts')
        // ->select('body')
        // ->get();

        // $posts = DB::table('posts')
        // ->where('created_at', '>', now()->subDay())
        // ->orWhere('title', 'Mr.')
        // ->get();

        $posts = DB::table('posts')
        // ->whereBetween('id', [3,5])
        // ->whereNotNull('title')
        
        // ->select('title')
        // ->distinct()

        // ->orderBy('title', 'asc')
        // ->oldest()
        // ->inRandomOrder()
        
        // ->get();

        // ->orderBy('created_at', 'desc')
        // ->first();

        // ->where('id', $id)
        // ->count();

        // ->min('id');
        // ->max('id');
        // ->sum('id');
        // ->avg('id');

        // ->insert([
        //     'title' => 'New Post', 
        //     'body' => "New Body"
        // ]);

        ->where('id', '=', 3)
        // ->update([
        //     'title' => 'New Title',
        //     'body' => 'Updated Body'
        // ]);

        ->delete();
        dd($posts);
    }
}
