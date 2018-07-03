<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class PostsController extends Controller
{
	public function index()
    {
        $posts= Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);
        return view('posts.posts', compact('posts'));
    }
    public function show(Post $post)
    {
    	
    	return view('posts.show', compact('post'));
    }
    public function category($slug){
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts= Post::where('category_id', $category)->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(4);
        return view('posts.posts', compact('posts'));
    }
    public function tag($slug){
        $posts = Post::whereHas('tags', function($query)use($slug){
            $query->where('slug', $slug);
        })

        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(4);
        return view('posts.posts', compact('posts'));
    }
}
