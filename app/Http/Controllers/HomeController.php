<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('home')->with('posts', $posts);
        //return view('home')->with('posts', Post::all());;
    }

    // public function admin() 
    // {
    //     $users = User::all();
    //     return view('admin')->with('users', $users);
    // }
}
