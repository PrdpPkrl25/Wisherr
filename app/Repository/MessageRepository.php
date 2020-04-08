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

    public function handleCreate($request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $receiver=Receiver::create(['name'=>$name,'email'=>$email,'phone'=>$phone]);
        $receiverId=$receiver->id;
        if($request['receiver_detail']!=null)
        {
            $id=$request['receiver_detail.id'];
        }
        $userId=Auth::id();
        $userName=Auth::user()->name;
        $request['message_content']="Dear $name,\r\n".$request['message_content']."\r\nFrom :$userName";
        $message_content=$request['message_content'];
        $template_id=$request['template_id'];
        $message=Message::create([
            'sender_id'=>$userId,
            'receiver_id'=>$receiverId,
            'template_id'=>$template_id,
            'message_content'=>$message_content,
            'user_id'=>$userId
        ]);
        $messageId=$message->id;
        return $messageId;

    }

    public function createViewData($id)
    {
        $templates=Template::all();
        //dd($templates);
        $contacts=Contact::where('user_id','=',Auth::id())->get();
        $event=Event::find($id);
        return array($event,$contacts,$templates);
    }


    public function getEditData($request)
    {

    }

    public function handleEdit($request)
    {

    }

    public function handleDelete($request)
    {

    }
}
