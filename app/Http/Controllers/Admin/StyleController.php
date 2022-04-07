<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewStylelRequest;
use App\Models\Admin\Style;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $styles=Style::query();

        if (\request()->filled('style')){
            $styles->where('title', \request('style'));
        }
        $styles=$styles->paginate(8);

        return view('admin.styles.index', [
            'styles'=>$styles
        ]);
    }
    public function store(NewStylelRequest $request): \Illuminate\Http\RedirectResponse
    {
        $style=Style::query()->create([
            'title'=>$request->get('title'),
        ]);
        return redirect(route('list.styles'));
    }

    public function edit(Style $slug): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.styles.edit', [
            'style'=>$slug,
        ]);
    }

    public function update(Style $slug, NewStylelRequest $request)
    {
        $existStyle=Style::query()->where('title', $request->get('title'))
            ->where('id', '!=', $slug->id)->exists();
        if ($existStyle){
            return redirect()->back()->withErrors(["style"=>".اين استايل قبلا ايجاد شده است"]);
        }
        $slug->slug=null;
        $slug->update([
            'title'=>$request->get('title')
        ]);
        return redirect(route('list.styles'));
    }

    public function destroy(Style $slug)
    {
        if ($slug->artists()->count()>0){
            return back()->withErrors(["chile"=>".يوك! تعدادي از خواننده ها از اين دسته هستند"]);
        }
        $slug->delete();
        return redirect(route('list.styles'));
    }
}
