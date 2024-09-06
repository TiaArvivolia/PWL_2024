<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }
    // public function greeting() {
    //     return view('blog.hello', ['name' => 'Tia']);
    // }
    public function greeting() {
        return view('blog.hello')
        ->with('name', 'Tia')
        ->with('occupation', 'Astronaut');
    }
    
}