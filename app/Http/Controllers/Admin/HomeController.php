<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $posts_count = Post::all()->count();
        $categories_count = Category::all()->count();
        return view('admin.home.index', compact('posts_count', 'categories_count'));
    }
}
