<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(){
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);
    }


    public function register(){
        $title = 'Register';
        return view('pages.register')->with('title', $title);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }

    public function squad(){
        $title = 'Squad';
        return view('pages.squad')->with('title', $title);
    }

    public function login(){
        $title = 'Login';
        return view('pages.login')->with('title', $title);
    }
}