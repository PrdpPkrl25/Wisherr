<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemplateRequest;
use App\Model\Template;
use App\Repository\TemplateRepository;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    private $templateRepository;
    public function __construct(TemplateRepository $templateRepository)
    {
        $this->templateRepository=$templateRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $templates=$this->templateRepository->getIndexdata();
        return view('template.index',compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreTemplateRequest $request)
    {
        $this->templateRepository->handleCreate($request);
        return redirect()->route('templates.index')->with('message','Template Created Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  Template  $template
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Template $template)
    {
        return view('template.show',compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Template  $template
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $template=$this->templateRepository->getEditdata($id);
        return view('template.edit',compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Template  $template
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreTemplateRequest $request, $id)
    {
        $this->templateRepository->handleEdit($request,$id);
        return redirect()->route('templates.index')->with('message','Template Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Template  $template
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->templateRepository->handleDelete($id);
        return redirect()->route('templates.index');
    }
}
