<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\Session\Session;

class MessageController extends Controller
{
    public function index()
    {
        $messages_inbox = Message::where('receiver_id',\Auth::user()->id)
                                    ->get();

        return view('workspace.comman.message.inbox')
                    ->with(['messages'=>$messages_inbox]);
    }

    public function sent()
    {
        $sent = Message::where('sender_id',\Auth::user()->id)
                        ->get();
        return view('workspace.comman.message.sent')
                    ->with(['messages'=>$sent]);
    }

    public function create()
    {
        if(\Auth::user()->role==3)
        {
            $persons = User::where('role','not like','faculty')
                            ->get();
        }
        if(\Auth::user()->role==4)
        {
            $persons = User::where('role','not like','student')
                            ->get();
        }
        if(\Auth::user()->role==1)
        {
            $persons = User::all();
        }
        return view('workspace.comman.message.create')
                    ->with(['persons'=>$persons]);
    }


    public function store(Request $request)
    {

        $message = new Message();
        $message->sender_id = \Auth::user()->id;
        $message->receiver_id = $request->receiver_id;
        $message->subject = $request->subject;
        $message->message = $request->message;
        if ( $request->has('attachment'))
        {
            $message->attachment = $request->attachment;
        }
        else{
            $message->attachment = " No attachment";
        }
        $message->save();
        return "Message Transimmited";
    }

    public function show($id)
    {
        $message = Message::find($id);
        return view('workspace.comman.message.message')
                    ->with(['message'=>$message]);
    }
}
