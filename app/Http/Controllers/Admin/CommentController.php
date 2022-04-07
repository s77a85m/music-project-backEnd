<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments=Comment::query();
        if (\request()->filled('comment')){
            $comments->where('content', 'like', '%'.\request('comment').'%');
        }
        $comments=$comments->paginate(8);
        return view('admin.comments.index', [
            'comments'=>$comments
        ]);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect(route('list.comments'));
    }
}
