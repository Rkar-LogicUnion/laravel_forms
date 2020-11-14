<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class HomeController extends Controller
{
    public function index(){
        $categories=Category::latest();
        $posts=Post::latest();
        return view('home',compact('categories','posts'));
    }
}
