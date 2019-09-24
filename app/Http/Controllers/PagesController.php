<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcom to GreenWing Education';
        return view('Pages.index', compact('title'));
    }

    public function about() {
        return view('Pages.about');
    } 

    public function signup() {
        return view('Pages.signup');
    }

    public function student() {
        return view('Pages.student');
    }
}
