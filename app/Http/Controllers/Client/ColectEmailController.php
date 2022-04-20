<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewEmailRequest;
use App\Models\Client\Email;
use Illuminate\Http\Request;

class ColectEmailController extends Controller
{
    public function store(NewEmailRequest $request)
    {

        Email::query()->create([
            'email'=>$request->get('email'),
        ]);
        return back();
    }
}
