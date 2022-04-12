<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Artist;
use App\Models\Admin\Music;
use App\Models\Admin\Style;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $topSwiper=Music::query()->inRandomOrder()->limit(3)->get();
        $leftSwiper=Music::query()->inRandomOrder()->limit(2)->get();
        $suggest=Music::query()->orderByDesc('is_publish')->limit(7)->get();
        $visited=Music::query()->orderByDesc('count_view')->limit(8)->get();

        return view('client.home', [
            'topSwipers'=>$topSwiper,
            'leftSwipers'=>$leftSwiper,
            'suggests'=>$suggest,
            'visites'=>$visited
        ]);
    }
}
