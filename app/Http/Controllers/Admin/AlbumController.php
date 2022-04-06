<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewAlbumRequest;
use App\Models\Admin\Album;
use App\Models\Admin\Artist;
use Illuminate\Http\Request;
use Morilog\Jalali\CalendarUtils;

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
        $shams=$request->get('date');
        $explode=explode('/',$shams);
        $date_bad=CalendarUtils::toGregorian($explode['0'], $explode['1'], $explode['2']);
        $date=implode('-', $date_bad);
        Album::query()->create([
           'title'=>$request->get('title'),
           'artist_id'=>$request->get('artist'),
            'is_publish'=>$date
        ]);
        return back();
    }

    public function show(Album $slug)
    {
        $isPublish=CalendarUtils::strftime('Y/m/d', strtotime($slug->is_publish));
        $artists=Artist::all();
        return view('admin.albums.edit', [
            'album'=>$slug ,
            'artists'=>$artists ,
            'publish'=>$isPublish,
        ]);
    }

    public function update(NewAlbumRequest $request, Album $slug)
    {
        $shams=$request->get('date');
        $explode=explode('/',$shams);
        $date_bad=CalendarUtils::toGregorian($explode['0'], $explode['1'], $explode['2']);
        $date=implode('-', $date_bad);
        $slug->update([
            'title'=>$request->get('title') ,
            'artist_id'=>$request->get('artist') ,
            'is_publish'=>$date
        ]);
        return redirect(route('list.albums'));
    }

    public function destroy(Album $slug)
    {
        $slug->delete();
        return back();
    }
}
