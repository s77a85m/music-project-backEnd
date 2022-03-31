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
        $artists=Artist::paginate(8);
        return view('admin.artists.index', [
            'artists'=>$artists,
            'styles'=>Style::all()
        ]);
    }

    public function store(NewArtistRequest $request){
        $path=$request->file('image')->store('/admin/artists' , 'privat' );
        $artist=Artist::query()->create([
            'style_id'=>$request->get('style'),
            'name'=>$request->get('name'),
            'image'=>$path
        ]);
        return back();
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
        if ($request->hasFile('image')){
            $image=$request->file('image');
            Storage::disk('privat')->delete($slug->image);
            $path=$image->store('/admin/artists', 'privat');
        }else{
            $path=$slug->image;
        }
        $slug->update([
            'name'=>$request->get('name'),
            'style_id'=>$request->get('style'),
            'image'=>$path
        ]);
        return redirect(route('list.artists'));
    }

    public function destroy(Artist $slug)
    {
        Storage::disk('privat')->delete($slug->image);
        $slug->delete();
        return back();
    }
}
