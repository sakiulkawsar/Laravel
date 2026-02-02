<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FromController extends Controller
{
    public function home(){
        return Inertia::render('home');
    }
    
    public function about(){
        return Inertia::render('about');
    }
}
