<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Admin\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request)
    {
        $user=User::query()->create([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password'))
        ]);
        auth()->login($user);

        return back();
    }

    public function create(LoginRequest $request)
    {
        $role=Role::query()->where('title', 'user-normal')->get();
        $user=User::query()->where('email', $request->get('email'))->firstOrFail();
        if (!Hash::check($request->get('password'), $user->password)){
            return back()->withErrors(['password'=>'نام كاربري يا رمز عبور اشتباه است.']);
        }
        $user->roles()->attach($role);
        auth()->login($user);
        return back();
    }


    public function destroy()
    {
        auth()->logout();
        return back();
    }
}
