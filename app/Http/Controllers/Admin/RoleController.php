<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Permission;
use App\Models\Admin\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles=Role::query();
        if (\request()->filled('role')){
            $roles->where('title', 'like', '%'.\request('role').'%');
        }
        $roles=$roles->paginate(8);
        $permissions=Permission::all();
        return view('admin.roles.index', [
            'roles'=>$roles,
            'permissions'=>$permissions
        ]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'role'=>['required'],
            'permission'=>['required', 'array'],
            'permission.*'=>['exists:permissions,id']
        ],[
            'role.required'=>'يك عنوان براي نقش وارد كنيد',
            'permission.array'=>'فرمت صحيح وارد نشده است.',
            'permission.required'=>'فرمت صحيح وارد نشده است.',
            'permission.exist'=>'اين دسترسي وجود ندارد',
        ]);
        $role=Role::query()->create([
            'title'=>$request->get('role')
        ]);
        $role->permissions()->attach($request->get('permission'));
        return to_route('list.roles');
    }

    public function show(Role $slug)
    {
        $permissions=Permission::query()->get();
        return view('admin.roles.edit', [
            'role'=>$slug,
            'permissions'=>$permissions
        ]);
    }

    public function update(Role $slug, Request $request)
    {
        $this->validate($request, [
            'role'=>['required'],
            'permission'=>['required', 'array'],
            'permission.*'=>['exists:permissions,id']
        ],[
            'role.required'=>'يك عنوان براي نقش وارد كنيد',
            'permission.array'=>'فرمت صحيح وارد نشده است.',
            'permission.required'=>'فرمت صحيح وارد نشده است.',
            'permission.exist'=>'اين دسترسي وجود ندارد',
        ]);
        $slug->update([
            'title'=>$request->get('role')
        ]);
        $slug->permissions()->sync($request->get('permission'));
        return to_route('list.roles');
    }

    public function destroy(Role $slug)
    {
        $slug->permissions()->detach();
        $slug->delete();
        return to_route('list.roles');
    }
}
