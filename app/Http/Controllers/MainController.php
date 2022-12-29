<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('main.content.welcome', [
            'active' => 'Home',
            'title' => 'Home'
        ]);
    }
    
    public function aboutme(){
        return view('main.content.welcome', [
            'active' => 'About Me',
            'title' => 'About Me'
        ]);
    }
    
    public function projects(){
        return view('main.content.welcome', [
            'active' => 'Projects',
            'title' => 'Projects'
        ]);
    }
}
