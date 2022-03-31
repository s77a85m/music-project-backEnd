<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewAlbumRequest;
use App\Models\Admin\Album;
use App\Models\Admin\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $albums=Album::paginate(8);
        $artists=Artist::all();
        return view('admin.albums.index', [
            'albums'=>$albums ,
            'artists'=>$artists,
        ]);
    }
    public function store(NewAlbumRequest $request)
    {
        Album::query()->create([
           'title'=>$request->get('title'),
           'artist_id'=>$request->get('artist')
        ]);
        return back();
    }

    public function show(Album $slug)
    {
        $artists=Artist::all();
        return view('admin.albums.edit', [
            'album'=>$slug ,
            'artists'=>$artists ,
        ]);
    }

    public function update(NewAlbumRequest $request, Album $slug)
    {
        $slug->update([
            'title'=>$request->get('title') ,
            'artist_id'=>$request->get('artist') ,
        ]);
        return redirect(route('list.albums'));
    }

    public function destroy(Album $slug)
    {
        $slug->delete();
        return back();
    }
}
