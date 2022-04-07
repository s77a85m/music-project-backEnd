<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Album;
use App\Models\Admin\Comment;
use App\Models\Admin\Download;
use App\Models\Admin\Music;
use App\Models\User;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        $countUser=User::query()->count();
        $countMusic=Music::query()->count();
        $countComment=Comment::query()->count();
        $countComment=Comment::query()->count();
        $download=Download::find(1);
        $downloadCount=$download->number;

        return view('admin.dashboard', [
            'countUser'=>$countUser,
            'countMusic'=>$countMusic,
            'countComment'=>$countComment,
            'countDownload'=>$downloadCount
        ]);
    }
}
