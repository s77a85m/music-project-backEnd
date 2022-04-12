<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Models\Admin\Artist;
use App\Models\Admin\Style;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{
    public function index()
    {

        $artists=Artist::query();
        if (\request()->filled('artist')){
            $artists->where('name', 'like', '%'.\request('artist').'%');
        }
        $artists=$artists->paginate(8);
        return view('admin.artists.index', [
            'artists'=>$artists,
            'styles'=>Style::all()
        ]);
    }

    public function store(NewArtistRequest $request){

        Artist::query()->create([
            'style_id'=>$request->get('style'),
            'name'=>$request->get('name'),
        ]);
        return redirect(route('list.artists'));
    }

    public function show(Artist $slug)
    {
        $style=Style::all();
        return view('admin.artists.edit', [
            'artist'=>$slug,
            'styles'=>$style
        ]);
    }

    public function update(UpdateArtistRequest $request, Artist $slug)
    {

        $slug->slug=null;
        $slug->update([
            'name'=>$request->get('name'),
            'style_id'=>$request->get('style'),
        ]);
        return redirect(route('list.artists'));
    }

    public function destroy(Artist $slug)
    {
        $slug->delete();
        return redirect(route('list.artists'));
    }
}
