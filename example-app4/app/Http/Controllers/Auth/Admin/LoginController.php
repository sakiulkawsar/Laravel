<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Expr\FuncCall;

class LoginController extends Controller
{
    public function creaate(){
        return view('admin_login');
    }
    
}

