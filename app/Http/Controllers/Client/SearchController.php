<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Music;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()){
            $val=$request->value;
            $result=Music::query()->where('title', 'like', '%'.$val.'%')
                ->orWhereHas('artist', function ($query)use ($val){
                    return $query->where('name', 'like', '%'.$val.'%');
                })->get();
            $output='';
            if (count($result)>0){
                foreach ($result as $res){
                    $output .='
                        <a href="'.route('single.music', $res->slug).'" class="border border-style dark:bg-dark-800 bg-gray-200 shadow-md rounded-md p-1 w-full gap-3 h-16 flex ">
                                <div class="aspect-square rounded-md overflow-hidden">
                                    <img src="'.asset('/storage/'.$res->image).'" alt="'.$res->title.'" title="'.$res->title.'" class="w-full h-full">
                                </div>
                                <div class="flex flex-col text-sm font-normal justify-center title-color">
                                    <h3>'.$res->title.'</h3>
                                    <h4>'.$res->artist->name.'</h4>
                                </div>
                        </a>';
                }
            }else{
                $output .='<span class="text-sm text-gray-400 font-medium">نتيجه اي يافت نشد</span>';
            }
            return $output;
        }
    }
}
