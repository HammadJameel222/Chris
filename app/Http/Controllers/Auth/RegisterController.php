<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Traits\Auth\HasAuth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\View\View;

class RegisterController extends Controller
{
    use HasAuth;

    public function registerForm():View
    {
        return view('user.screens.auth.register');
    }

    public function register(RegisterRequest $request )
    {
        $user = User::create($request->sanitized());
        if($user)
        {
            // dd($user);
            $this->authenticate($request->sanitized());
            return redirect()->route('home');
        }

    }

}
