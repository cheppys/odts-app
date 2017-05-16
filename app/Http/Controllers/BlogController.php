<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    	$posts = Post::simplePaginate(2);
    	return view('index', ['posts' => $posts]);
    }
}
