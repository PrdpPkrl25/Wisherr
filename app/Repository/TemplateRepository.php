<?php


namespace App\Repository;


use App\Model\Template;

class TemplateRepository
{
    public function getIndexdata(){
        return Template::all();
    }

    public function handleCreate($request)
    {
        $template=Template::create($request->all());
        return $template;
    }

    public function getEditdata($id)
    {
        $template=Template::find($id);
        return $template;
    }

    public function handleEdit($request,$id)
    {
        $template=Template::find($id);
        $template->update($request->all());
    }

    public function handleDelete($id)
    {
        $template=Template::find($id);
        $template->delete();
    }
}
