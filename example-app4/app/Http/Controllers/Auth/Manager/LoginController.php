<?php

namespace App\Http\Controllers\Auth\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.manage-login'); // Make sure this view exists
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::guard('manager')->attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'Invalid manager credentials.',
            ]);
        }

        $request->session()->regenerate();

        // Change this to your manager dashboard route
        return redirect('/manager/dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('manager')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/manager/login');
    }
}
