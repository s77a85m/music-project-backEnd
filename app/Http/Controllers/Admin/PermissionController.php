<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions=Permission::query();
        if (\request()->filled('permission')){
            $permissions->where('title', 'like', '%'.\request('permission').'%');
        }
        $permissions=$permissions->paginate(8);
        return view('admin.permissions.index', [
            'permissions'=>$permissions
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'permission'=>['required']
        ],[
            'permission.required'=>'يك عنوان وارد كنيد'
        ]);
        Permission::query()->create([
            'title'=>$request->get('permission')
        ]);
        return redirect(route('list.permissions'));
    }

    public function show(Permission $slug)
    {
        return view('admin.permissions.edit', [
            'permission'=>$slug
        ]);
    }

    public function update(Permission $slug, Request $request)
    {
        $this->validate($request,[
            'permission'=>['required']
        ],[
            'permission.required'=>'فيلد عنوان نبايد خالي باشد'
        ]);
        $slug->slug=null;
        $slug->update([
            'title'=>$request->get('permission')
        ]);
        return redirect(route('list.permissions'));
    }

    public function destroy(Permission $slug)
    {
        $slug->roles()->detach();
        $slug->delete();
        return redirect(route('list.permissions'));
    }

}
