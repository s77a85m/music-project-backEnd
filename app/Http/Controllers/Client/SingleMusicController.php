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
        $randMusMob=Music::query()->where('style_id', $slug->style->id)->inRandomOrder()->limit(6)->get();
        $topMusics=Music::query()->inRandomOrder()->limit(10)->get();
        $relStyle=Music::query()->where('id', '!=', $slug->id)
            ->where('style_id', $slug->style_id)->limit(20)->get();
        $relArtist=Artist::query()->where('id', '!=', $slug->artist_id)
            ->where('style_id', $slug->style_id)->limit(20)->get();
        $view=$slug->count_view;
        $view += 1;
        $slug->count_view=$view;
        $slug->save();


        return view('client.musics.single', [
            'topMusics'=>$topMusics,
            'music'=>$slug,
            'relStyles'=>$relStyle,
            'relArtists'=>$relArtist,
            'randMusMobs'=>$randMusMob
        ]);
    }
}
