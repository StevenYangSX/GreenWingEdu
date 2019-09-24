<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       if((auth()->user()->ifAdmin) == 0 ) {
            
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
        }

        if((auth()->user()->ifAdmin) == 1 ) {
           
            $posts =  Post::orderBy('user_id', 'desc')->paginate(1000);
            return view('dashboard')->with('posts', $posts);
            }

        
    }
}
