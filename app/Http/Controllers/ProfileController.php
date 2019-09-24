<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
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
        $user = User::where('id', 'LIKE', '%' . $user_id . '%')-> get();
        return view('auth.profile')->withDetails($user);
        }

        if((auth()->user()->ifAdmin) == 1 ) {
           
            $user =  User::orderBy('id', 'desc')->paginate(1000);
            return view('auth.profile')->withDetails($user);
            }

        
    }
}
