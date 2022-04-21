<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Artist;
use App\Models\Admin\Music;
use Illuminate\Http\Request;

class AllMusicController extends Controller
{
    public function index(Artist $slug)
    {
        $topMusics=Music::query()->inRandomOrder()->limit(10)->get();
        $allMusics=$slug->musics()->inRandomOrder()->get();
        $newMusics=$slug->musics()->orderByDesc('is_publish')->get();
        $musicAlbum=$slug->albums;

        return view('client.artists.all-artist-music', [
            'allMusics'=>$allMusics,
            'newMusics'=>$newMusics,
            'musicsAlbum'=>$musicAlbum,
            'topMusics'=>$topMusics,
            'artist'=>$slug
        ]);
    }
}
