<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use App\Model\Template;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getTemplateContent(){
        $template_id=\request()->input('template_id');
        $template=Template::where('id','=',$template_id)->first();
        return $template->content;;
    }

    public function getContactContent(){
    $contact_id= \request()->input('contact_id');
    $contact=Contact::where('id','=',$contact_id)->first();
    return $contact;
    }
}
