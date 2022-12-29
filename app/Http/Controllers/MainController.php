<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('main.content.home', [
            'active' => 'Home',
            'title' => 'Home'
        ]);
    }
    
    public function aboutme(){
        return view('main.content.about-me', [
            'active' => 'About Me',
            'title' => 'About Me'
        ]);
    }
    
    public function projects(){
        return view('main.content.projects', [
            'active' => 'Projects',
            'title' => 'Projects'
        ]);
    }
}
