<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::query();
        if (\request()->filled('user')){
            $users->where('name', 'like', '%'.\request('user').'%');
        }
        $users=$users->paginate(8);
        return view('admin.users.index', [
            'users'=>$users
        ]);
    }

    public function destroy(User $slug)
    {
        $slug->delete();
        return redirect(route('list.users'));
    }
}
