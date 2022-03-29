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
        $styles=Style::paginate(8);
        return view('admin.styles.index', [
            'styles'=>$styles
        ]);
    }
    public function store(NewStylelRequest $request): \Illuminate\Http\RedirectResponse
    {
        $style=Style::query()->create([
            'title'=>$request->get('title'),
        ]);
        return redirect()->back();
    }

    public function edit(Style $slug): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.styles.edit', [
            'style'=>$slug,
        ]);
    }

    public function update(Style $slug, Request $request)
    {
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
        return back();
    }
}
