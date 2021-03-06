<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewMusicRequest;
use App\Http\Requests\UpdateMusicRequest;
use App\Models\Admin\Album;
use App\Models\Admin\Artist;
use App\Models\Admin\Music;
use App\Models\Admin\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;

class MusicController extends Controller
{
    public function index()
    {

        $styles=Style::all();
        $artists=Artist::all();
        $albums=Album::all();
        $musics = Music::query();
        if (\request()->filled('music')){
            $val=\request()->get('music');
            $musics->where('title', 'like', '%'.$val.'%')
                ->orWhereHas('artist', function ($query) use ($val){
                    return $query->where('name', 'like', '%'.$val.'%');
                });
        }
        $musics=$musics->paginate(8);
        return view('admin.musics.index', [
            'musics' => $musics,
            'artists'=>$artists,
            'albums'=>$albums,
            'styles'=>$styles
        ]);
    }

    public function store(NewMusicRequest $request)
    {
        $shams=$request->get('date');
        $explode=explode('/',$shams);
        $date_bad=CalendarUtils::toGregorian($explode['0'], $explode['1'], $explode['2']);
        $date=implode('-', $date_bad);
        $image=$request->file('image')->store('/admin/cover-music', 'privat');
//        $file_320=$request->file('high')->store('/admin/high-music', 'privat');
//        $file_128=$request->file('low')->store('/admin/low-music', 'privat');
        if ($request->filled('highLink')){
            $link_320=$request->get('highLink');
        }else{
            $link_320=null;
        }
        if ($request->filled('lowLink')){
            $link_128=$request->get('lowLink');
        }else{
            $link_128=null;
        }
        Music::query()->create([
            'title'=>$request->get('title'),
            'artist_id'=>$request->get('artist'),
            'style_id'=>$request->get('style'),
            'album_id'=>$request->get('album'),
            'description'=>$request->get('description'),
            'image'=>$image,
            'mp3_320'=>$link_320,
            'mp3_128'=>$link_128,
            'is_publish'=>$date
        ]);
        return redirect(route('list.musics'));
    }

    public function show(Music $slug)
    {
        $isPublish=CalendarUtils::strftime('Y/m/d', strtotime($slug->is_publish));
        $styles=Style::all();
        $artists=Artist::all();
        $albums=Album::all();
        return view('admin.musics.edit', [
            'music'=>$slug,
            'artists'=>$artists,
            'albums'=>$albums,
            'styles'=>$styles,
            'publish'=>$isPublish,
        ]);
    }

    public function update(Music $slug, UpdateMusicRequest $request)
    {
        $albumExists=Album::query()->where('id', $request->album)->exists();
        if ($request->get('album')==0){
            $albumId=null;
        }elseif (!$albumExists){
            return back()->withErrors(["album"=>".?????? ???????????? ???????? ??????????"]);
        }else{
            $albumId=$request->get('album');
        }
        $shams=$request->get('date');
        $explode=explode('/',$shams);
        $date_bad=CalendarUtils::toGregorian($explode['0'], $explode['1'], $explode['2']);
        $date=implode('-', $date_bad);
        $image=$slug->image;
        if($request->hasFile('image')){
            Storage::disk('privat')->delete($slug->image);
            $image=$request->file('image')->store('/admin/cover-music', 'privat');
        }
//        $high=$slug->mp3_320;
//        if($request->hasFile('high')){
//            Storage::disk('privat')->delete($slug->mp3_320);
//            $high=$request->file('high')->store('/admin/high-music', 'privat');
//        }
//        $low=$slug->mp3_128;
//        if($request->hasFile('low')){
//            Storage::disk('privat')->delete($slug->mp3_128);
//            $low=$request->file('low')->store('/admin/low-music', 'privat');
//        }
        $high=$slug->mp3_320;
        if($request->filled('highLink')){
            $high=$request->get('highLink');
        }
        $low=$slug->mp3_128;
        if($request->filled('lowLink')){
            $low=$request->get('lowLink');
        }
        $slug->slug=null;
        $slug->update([
            'title'=>$request->get('title'),
            'artist_id'=>$request->get('artist'),
            'album_id'=>$albumId,
            'style_id'=>$request->get('style'),
            'image'=>$image,
            'mp3_320'=>$high,
            'mp3_128'=>$low,
            'is_publish'=>$date,
            'description'=>$request->get('description')
        ]);
        return redirect(route('list.musics'));
    }

    public function destroy(Music $slug)
    {
        Storage::disk('privat')->delete($slug->image);
        $slug->delete();
        return redirect(route('list.musics'));
    }
}
