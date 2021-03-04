<?php

namespace App\Http\Controllers;

use App\Mail\UserMessageMail;
use App\Models\Message;
use App\Models\User;
use App\Notifications\UserMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class MessageController extends Controller
{


    public function __construct()
    {


        $this->middleware('auth')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $messages=Message::all();
        return view('back.message.index')->with(['messages'=>$messages]);
    }

    /**x
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $messages=Message::all();
        return view('back.message.index')->with(['messages'=>$messages]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'email' => 'required',
            'name' => ['required', 'max:255'],
            'message' => ['required'],
        ]);

        $message=new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject =$request->subject;
        $message->message =$request->message;

        $message->save();
        $admin=User::find(1);
      //  $admin->notify(new UserMessageNotification())
     //   Notification::send($admin, new UserMessageNotification());

        $admin->notify(new UserMessageNotification($message));
        Notification::send($admin, new UserMessageNotification($message));
        print('meesge sent to manager thank you for your interest');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
        $message->status=1;
        $message->save();

        return view('back.message.show')->with(['message'=>$message]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
        $message->status=1;
        $message->save();

        return view('back.message.show')->with(['message'=>$message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //

        $this->validate($request, [
            'status' => 'required'

        ]);

        $input = $request->all();
        $message->fill($input)->save();
        return redirect()->back()->with('success','Message Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
        $message->delete();
        return redirect()->back()->with('success','Removed');

    }
}
