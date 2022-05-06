<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
