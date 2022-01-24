<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
        public function store(CommentRequest $request)
    {
        $savedata = [
            'message_id' => $request->message_id,
            'name' => $request->name,
            'comment' => $request->comment,
        ];
 
        $comment = new Comment;
        $comment->fill($savedata)->save();
 
        return redirect()->route('bbs.show', [$savedata['post_id']])->with('commentstatus','コメントを投稿しました');
    }
}
