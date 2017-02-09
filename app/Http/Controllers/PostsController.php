<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Validation\Rule;

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
            ->filter(request(['month', 'year', 'tag', 'country']))
            ->paginate(5);  
        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		if(auth()->user()->isWriter()) {		
			
			return view('posts.create');		
		
		}
		
		flash()->error('Error', 'You are not authorized to create new Posts.');
		
		return back();	
		
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
            'title' => 'required|max:20|unique:posts,title',
            'excert' => 'required',
			'country' => 'required',
        ]);
        
		$post = (new Post)->fillData(request());
		
		auth()->user()->publish($post);
		
		$post->tags()->attach(request('tags'));
        
        // session()->flash('message', 'Your post has been created.');
		// session()->flash('flash_message_aside', 'Your post has been created.');
		flash()->aside('Your post has been created.');
		
		event(new \App\Events\PostPublished($post));
        
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
		if ($post->type == 'html') {
			
			return view('posts.show', compact('post'));
		}
		
		$images = (new ImageCollection())->get($post->page);
        			
        return view('posts.locations' . '.' . $post->page, compact('post', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
		$user = auth()->user();
		
		if($user->ownes($post) or $user->isAdmin()) {		
			
			return view('posts.edit', compact('post'));			
		
		}
		
		flash()->error('Error', 'You are not authorized to edit the Post.');
		
		return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
		// input validation and authorization check via PostUpdateRequest form request
		
		$post->fillData(request())->save();

		$post->tags()->sync((array)request('tags'));
		
        flash()->success('Success', 'Your Post has been updated.');
        
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $user = auth()->user();
		
		if($user->ownes($post) or $user->isAdmin()) {		
			
			$post->delete();
        
			flash()->aside('Your post has been deleted.', 'danger');
        
			return redirect('/posts');		
		
		}
		
		flash()->error('Error', 'You are not authorized to edit the Post.');
		
		return back();
    }
}
