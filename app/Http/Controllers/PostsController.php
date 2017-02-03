<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Post;
use App\Tools\ImageCollection;


class PostsController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth')->except(['index', 'show']);
	}
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();  
        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
		$this->validate(request(), [
            'title' => 'required|max:255',
            'excert' => 'required',
			'country' => 'required',
        ]);
        
		$post = (new Post)->fillData(request());
		
		auth()->user()->publish($post);
        
        $post->tags()->attach(request('tags'));
        
        session()->flash('message', 'Your post has been created.');
        
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
		$images = [];
        
        if ($post->type == 'blade') {			
			$images = (new ImageCollection())->get($post->page);
        }			
			
        return view('posts.show', compact('post', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
		$this->validate(request(), [
            'title' => 'required|max:255',
            'excert' => 'required',
			'country' => 'required',
			'featured' => 'sometimes|mimes:jpeg,jpg|max:500'
        ]);        
		
		$post->fillData(request())->save();

		$post->tags()->sync((array)request('tags'));
		
        session()->flash('message', 'Your post has been updated.');
        
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        session()->flash('alert', 'Your post has been deleted.');
        
        return redirect('/posts');
    }
}
