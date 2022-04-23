<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles=Role::query();
        if (\request()->filled('role')){
            $roles=$roles->where('title', 'like', '%'.\request('role').'%')->get();
        }
        $roles=$roles->paginate(8);
        return view('admin.roles.index', [
            'roles'=>$roles
        ]);
    }
}
