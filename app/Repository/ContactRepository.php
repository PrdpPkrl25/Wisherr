<?php


namespace App\Repository;


use App\Model\Contact;
use Illuminate\Support\Facades\Auth;

class ContactRepository
{

    public function getIndexData()
    {
        $contacts=Contact::where('user_id','=',Auth::id())->get();
        return $contacts;
    }

    public function handleCreate($request)
    {
        $userId=Auth::id();
        $contact=Contact::create($request->all()+ ['user_id'=> $userId]);
        return $contact;

    }

    public function getEditData($id)
    {
        $contact=Contact::find($id);
        return $contact;
    }

    public function handleEdit($request,$id)
    {
        $contact=Contact::find($id);
        $contact->update($request->all());
        return $contact;

    }

    public function handleDelete($id)
    {
        $contact=Contact::find($id);
        $contact->delete();
    }
}
