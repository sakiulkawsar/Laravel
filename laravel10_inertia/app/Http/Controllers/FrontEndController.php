<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response; // Response type use করার জন্য

class FrontEndController extends Controller
{
    // Home page
    public function Home()
    {
        return Inertia::render('Home');
    }

    // About page
    public function About()
    {
        return Inertia::render('About');
    }
}

