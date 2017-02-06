<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\UserFeedback;

class PagesController extends Controller
{
    public function main()
    {
        $posts = \App\Post::inRandomOrder()->limit(8)->get();
		
		return view('pages.main', compact('posts'));
    }
	
    public function about()
    {
        return view('pages.about');
    }
	
    public function contacts()
    {
        return view('pages.contacts');
    }
    
    public function feedback()
	{
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email',
			'body' => 'required|max:255',
		]);	
        
        $admin = 'mike.wazovzky@yandex.ru';
        // $admin = 'alexander.nichiporenko@gmail.com';
        
        \Mail::to($admin)->send(new UserFeedback(request(['name', 'email', 'subj', 'body'])));
        
        return redirect('/contacts');
	}
}
