<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Role;
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
    public function show(User $slug)
    {
        $roles=Role::query()->get();
        return view('admin.users.edit', [
            'user'=>$slug,
            'roles'=>$roles
        ]);
    }

    public function update(User $slug, Request $request)
    {
        $this->validate($request,[
            'role'=>['array', 'required'],
            'role.*'=>['exists:roles,id']
        ],[
            'role.required'=>'حتما يك نشق وارد كنيد.',
            'role.exists'=>'اين نقش وجود ندارد',
        ]);
        $slug->roles()->sync($request->get('role'));
        return to_route('list.users');
    }

    public function destroy(User $slug)
    {
        $slug->roles()->detach();
        $slug->musics()->detach();
        $slug->delete();
        return redirect(route('list.users'));
    }
}
