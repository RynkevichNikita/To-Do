<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function welcome() 
    {
        return view('welcome');
    }
    
    public function create() 
    {
        return view('create');
    }
}
