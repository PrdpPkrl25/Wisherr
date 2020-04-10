<?php


namespace App\Repository;


use App\Model\Contact;
use App\Model\Event;
use App\Model\Message;
use App\Model\Receiver;
use App\Model\Template;
use Illuminate\Support\Facades\Auth;

class MessageRepository
{

    public function getIndexData($request)
    {

    }

    public function handleCreate($request,$event_id)
    {
        $event=Event::where('id','=',$event_id)->first();
        $receiver=Receiver::create($request->all());
        $receiverId=$receiver->id;
        $userId=Auth::id();
        $message_content=$request['message_content'];
        $message_time=$request['message_time'];
        $message=Message::create([
            'sender_id'=>$userId,
            'event_id'=>$event_id,
            'receiver_id'=>$receiverId,
            'message_content'=>$message_content,
            'message_time'=>$message_time
        ]);
        return array($message,$event,$receiver);

    }

    public function createViewData($id)
    {
        $templates=Template::all();
        $contacts=Contact::where('user_id','=',Auth::id())->get();
        $event=Event::find($id);
        return array($event,$contacts,$templates);
    }


    public function getEditData($request)
    {
        $event=Event::where('id','=',$request->event_id)->first();
        $receiver=Receiver::where('id','=',$request->receiver_id)->first();
        $templates=Template::all();
        $contacts=Contact::where('user_id','=',Auth::id())->get();
        return array($event,$receiver,$contacts,$templates);
    }

    public function handleEdit($request)
    {

    }

    public function handleDelete($id)
    {
        $message=Message::find($id);
        $event=Event::where('id','=',$message->event_id)->first();
        $message->delete();
        return $event;
    }
}
