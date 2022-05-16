<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\DashboardUpdateRequest;
use App\Models\User;
use http\Env\Response;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function home()
    {
        if (\request()->ajax()){
            return response()->json([
                'user'=>auth()->user()
            ])->setStatusCode(200);
        }
        return view('client.dashboard.home', [
            'user'=>auth()->user()
        ]);
    }

    public function favorite()
    {
        $user=auth()->user();
        $favorite=$user->musics;
        return response()->json([
            'favorites'=>$favorite
        ])->setStatusCode(200);
    }

    public function setting()
    {
        $user=auth()->user();
        return response()->json([
            'user'=>$user
        ])->setStatusCode(200);
    }

    public function update(DashboardUpdateRequest $request)
    {
        $user=auth()->user();
        /*check avatar*/
        if ($request->hasFile('file')){
            $this->validate($request, [
                'file'=>['mimes:jpg,png,svg,mpeg,jpeg']
            ],[
                'file.mimes'=>'فرمت فايل صحيح نسيت'
            ]);
            Storage::disk('privat')->delete($user->avatar);
            $avatar=$request->file('file')->store('users/avatar', 'privat');
        }else{
            $avatar=$user->avatar;
        }
        /*check email*/
        $emailExists=User::query()->where('email', $request->get('email'))
            ->where('id', '!=', $user->id)->exists();
        if ($emailExists){
            return response()->json([
                'errors'=>[
                    'email'=>['!اين ايمل قبلا استفاده شده است']
                ]
            ])->setStatusCode(400);
        }
        /*check password*/
        if ($request->filled('password')){
            $user->password=bcrypt($request->get('password'));
            $user->save();
        }
        /*update*/
        $user->update([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'avatar'=>$avatar
        ]);
        return response()->json([
            'user'=>$user
        ])->setStatusCode(200);
    }

    public function player()
    {
        $musics=auth()->user()->musics;
        return response()->json([
            'musics'=>$musics
        ])->setStatusCode(200);
    }

    public function firstLoad()
    {
        $musics=auth()->user()->musics;
        return response()->json([
            'musics'=>$musics
        ])->setStatusCode(200);
    }

}
