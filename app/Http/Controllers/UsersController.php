<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    /**
     * Show the application user data.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showPosts()
    {
		$user_id = auth()->user()->id;
		$user = User::find($user_id);
        return view('users.posts')->with('posts', $user->posts);
    }


}
