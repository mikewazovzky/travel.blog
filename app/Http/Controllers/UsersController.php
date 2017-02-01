<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	/**
     * Constructor, add authorization middleware to controller
     */  
	public function __construct()
	{
		// $this->middleware('admin', ['except' => ['edit', 'update']]);
	}
	
    /**
     * Display a listing of the resource.
	 *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
		
		return view('users.index', ['users' => $users]);
    }

	/**
     * Display the specified resource.
	 *
     * @param  \User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
	public function store()
    {
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:6|confirmed'
			
		]);		
		
		User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);		
				
		return redirect('users'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
	public function update(User $user)
	{
		$this->validate(request(), [
			'name' => 'required',
			'password' => 'required|min:6|confirmed'			
		]);	
		
		$user->update([
			'name' => request('name'), 
			'password' => bcrypt(request('password'))
		]);
		
		return redirect('users');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
		
		return redirect('users');
    }
}
