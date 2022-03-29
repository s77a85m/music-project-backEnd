<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Artist;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists=Artist::paginate(8);
        return view('admin.artists.index', [
            'artists'=>$artists
        ]);
    }

    public function store(Request $request){
        $path=$request->file('image')->store('public/admin/artists');
        $artist=Artist::query()->create([
            'name'=>$request->get('name'),
            'image'=>$path
        ]);
    }
}
