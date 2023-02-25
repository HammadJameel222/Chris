<?php

namespace App\Traits\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait HasAuth
{

    public function authenticate($credentials)
    {
        // dd($credentials, Auth::getLastAttempted(), Auth::attempt($credentials,false));
        if(Auth::attempt($credentials,false))
        {
            if(Auth::login(Auth::getLastAttempted()))
            {
                return true;
            }
        }
        return false;
    }

}
