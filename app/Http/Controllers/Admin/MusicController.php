<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Album;
use App\Models\Admin\Artist;
use App\Models\Admin\Music;
use App\Models\Admin\Style;
use Illuminate\Http\Request;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;

class MusicController extends Controller
{
    public function index()
    {
        $styles=Style::all();
        $artists=Artist::all();
        $albums=Album::all();
        $musics = Music::paginate('8');
        return view('admin.musics.index', [
            'musics' => $musics,
            'artists'=>$artists,
            'albums'=>$albums,
            'styles'=>$styles
        ]);
    }

    public function store(Request $request)
    {
        $shams=$request->get('date');
        $explode=explode('/',$shams);
        $date_bad=CalendarUtils::toGregorian($explode['0'], $explode['1'], $explode['2']);
        $date=implode('-', $date_bad);
        $image=$request->file('image')->store('/admin/cover-music', 'privat');
        $file_320=$request->file('high')->store('/admin/high-music', 'privat');
        $file_128=$request->file('high')->store('/admin/low-music', 'privat');
        Music::query()->create([
            'title'=>$request->get('title'),
            'artist_id'=>$request->get('artist'),
            'style_id'=>$request->get('style'),
            'album_id'=>$request->get('album'),
            'description'=>$request->get('description'),
            'image'=>$image,
            'mp3_320'=>$file_320,
            'mp3_128'=>$file_128,
            'is_publish'=>$date
        ]);
        return back();
    }
}
