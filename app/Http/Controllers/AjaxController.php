<?php

namespace App\Http\Controllers;

use App\Model\Template;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getTemplateContent(){
        $template_id=\request()->input('template_id');
        $template=Template::where('id','=',$template_id)->first();
        $template_content=$template->content;
        return $template_content;
    }

    public function getContactContent(){
    return \request()->input('contact_id');
    }
}
