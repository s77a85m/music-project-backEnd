<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Music;
use Illuminate\Http\Request;

class BelovedController extends Controller
{
    public function store(Music $slug)
    {
        auth()->user()->addFavorite($slug);
        return response()->json([
            "message"=>"ok"
        ])->setStatusCode(200);
    }
}
