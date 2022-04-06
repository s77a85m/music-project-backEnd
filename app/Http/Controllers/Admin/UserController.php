<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::paginate(8);
        return view('admin.users.index', [
            'users'=>$users
        ]);
    }

    public function destroy(User $slug)
    {
        $slug->delete();
        return back();
    }
}
