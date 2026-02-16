<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  addLog(){
        \App\Helpers\LogActivity::addToLog("Testing......");

    }
    public function  logList(){
        
    }
}
