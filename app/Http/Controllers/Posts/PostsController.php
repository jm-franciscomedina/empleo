<?php

namespace App\Http\Controllers\Posts;
use App\Post;
use App\Category;
use App\Tag;
use App\User;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        


        $this->validate($request,[
            'title'   => 'required',
            'excerpt' => 'required',
            'body'    => 'required',
            'category'=> 'required',
            'tags'    => 'required',
        ]);
        //return $request->all();   
        $post = new Post;
        $post->title = $request->get('title');
        $post->slug = str_slug($request->get('title'));
        $post->excerpt = $request->get('excerpt');
        $post->body = $request->get('body');
        $post->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')): null;
        $post->category_id = $request->get('category');
        $post->user_id = $request->get('users');
        $post->save();
        $post->tags()->attach($request->get('tags'));
        //$post->users()->attach($request->get('users')); 
        //esta linea puede ser util mas adelante por ahora no la usare 
        return back()->with('flash', 'Tu publicacion ha sido creada');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
