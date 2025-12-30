<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;



class HomeController extends Controller

{
     public function index()
    {   
        
        $students = Student::all();
        // return print_r($students);
        return view('home', ['students'=>$students]);

    }
 
    public function about()
    {
        return view('about');

    }
    public function contact()
    {
        return view('contact');

    }
       public function gallery()
    {
        return view('gallery');

    }

   
   

};