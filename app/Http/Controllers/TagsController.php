<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index2(Tag $tag)
    {
        $posts = $tag->posts()->paginate(5);
        
        return view('posts.index', compact('posts'));
    }
	
    public function index(Tag $tag)
    {
		return redirect('/posts' . '?tag=' . $tag->name);
    }	
}
