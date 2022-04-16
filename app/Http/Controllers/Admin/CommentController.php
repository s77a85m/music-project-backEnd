<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewCommentRequest;
use App\Models\Admin\Comment;
use App\Models\Admin\Music;
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

    public function store(Request $request, Music $slug)
    {
            $this->validate($request,[
                'name'=>['required'],
                'email'=>['required',],
                'content'=>['required', ]
            ],[
                'name.*'=>'يك نام انتخاب كنيد',
                'email.*'=>'يك ايميل انتخاب كنيد',
                'content.*'=>'يك كامنت بنويسيد',
            ]);
            $comment=Comment::query()->create([
                'content'=>$request->get('content'),
                'name'=>$request->get('name'),
                'email'=>$request->get('email'),
                'music_id'=>$slug->id,
            ]);
        if (auth()->check()){
            $user=auth()->user();
            $comment->user_id=$user->id;
            $comment->save();
        }
        $user=auth()->user();


        return back();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect(route('list.comments'));
    }
    
}
