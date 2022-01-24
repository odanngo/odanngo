<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Auth;

class LikeController extends Controller
{
 
    public function store(Message $message)
    {
        $message->likes()->attach(Auth::id());

        return redirect('/messages');
    }



public function destroy(Message $message)
    {
        $message->likes()->detach(Auth::id());

        return redirect('/messages');
    }


}
