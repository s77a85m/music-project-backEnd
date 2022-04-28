<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        $role=Role::query()->where('title', 'user-normal')->get();
        $user=Socialite::driver('google')->user();

        $userQuery=User::query()->where('email', $user->email);
        if ($userQuery->exists()){
            $authenticatedUser=$userQuery->first();
        }else{
            $authenticatedUser=User::query()->create([
                'name'=>$user->name,
                'email'=>$user->email,
                'password'=>bcrypt(now()->timestamp),
            ]);
            $authenticatedUser->roles()->attach($role);
        }

        auth()->login($authenticatedUser);
        return to_route('home');
    }

}
