<?php


namespace App\Repository;




use App\Model\Event;
use Illuminate\Support\Facades\Auth;

class EventRepository
{

    public function getIndexdata(){

        return Event::where('user_id','=',Auth::id())->get();
    }

    public function handleCreate($request)
    {
        $userId=Auth::id();
        $event=Event::create($request->all()+ ['user_id' => $userId]);
        return $event;
    }

    public function getEditdata($id)
    {
        $event=Event::find($id);
        return $event;
    }

    public function handleEdit($request,$id)
    {
        $event=Event::find($id);
        $event->update($request->all());
        return $event;
    }

    public function handleDelete($id)
    {
        $event=Event::find($id);
        $event->delete();
    }

}
