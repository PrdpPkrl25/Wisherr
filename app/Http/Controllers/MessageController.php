<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Model\Event;
use App\Model\Message;
use App\Model\Receiver;
use App\Repository\MessageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * @var MessageRepository
     */
    private $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->middleware('auth');
        $this->messageRepository=$messageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($eventId)
    {
        list($event,$contacts,$templates)=$this->messageRepository->createViewData($eventId);
        return view('message.create',compact('event','contacts','templates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store($event_id,StoreMessageRequest $request)
    {
       list($message,$event,$receiver)=$this->messageRepository->handleCreate($request,$event_id);
        return view('message.show',compact('message','event','receiver'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Message  $message
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Message $message)
    {
        $event=Event::where('id','=',$message->event_id)->first();
        $receiver=Receiver::where('id','=',$message->receiver_id)->first();
        return view('message.show',compact('message','event','receiver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Message  $message
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Message $message)
    {
        list($event,$receiver,$contacts,$templates)=$this->messageRepository->getEditData($message);
        return view('message.edit',compact('message','event','receiver','contacts','templates'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Message  $message
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
       $event_id=$this->messageRepository->handleDelete($id);
        return redirect()->route('events.show',$event_id);
    }
}
