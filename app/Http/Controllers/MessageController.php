<?php

namespace App\Http\Controllers;


use App\User;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{

    public function index()
    {
        $names=[];
        $message=new Message;
        $messages=$message->get();
        foreach($messages as $talk){
            $user=new User;
            $users = $user->where('id', $talk->user_id)->first()->name;
            array_push($names,$users);
        }
        return view('messages/index')->with(['messages' => $messages,'names' => $names]);
    }
    public function create()
    {
        return view('messages/create');
    }
    public function show()
    {
    return view('messages/show')->with(['messge' => $message]);
    }
    public function edit(Post $post)
    {
    return view('messages/create')->with(['message' => $message]);
    }
    public function store(Request $request, Message $message)
    {
    $input = $request['message'];
    $input['user_id']=Auth::id();
    $message->fill($input)->save();
    return redirect('/messages');
    }

}
