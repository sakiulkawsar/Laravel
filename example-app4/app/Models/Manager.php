<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authentication;


class Manager extends Authentication
{
    use HasFactory;
    protected $guard = 'manager';
}
