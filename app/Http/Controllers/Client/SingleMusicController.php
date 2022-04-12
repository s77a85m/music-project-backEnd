<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Artist;
use App\Models\Admin\Music;
use Illuminate\Http\Request;

class SingleMusicController extends Controller
{
    public function show(Music $slug)
    {
        $topMusics=Music::query()->inRandomOrder()->limit(10)->get();
        $relStyle=Music::query()->where('id', '!=', $slug->id)
            ->where('style_id', $slug->style_id)->get();
        $relArtist=Artist::query()->where('id', '!=', $slug->artist_id)
            ->where('style_id', $slug->style_id)->get();

        return view('client.musics.single', [
            'topMusics'=>$topMusics,
            'music'=>$slug,
            'relStyles'=>$relStyle,
            'relArtists'=>$relArtist
        ]);
    }
}
