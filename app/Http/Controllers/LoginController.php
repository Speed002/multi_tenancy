<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(User $user)
    {
        auth()->login($user);
        return redirect()->route('dashboard');
    }
}
