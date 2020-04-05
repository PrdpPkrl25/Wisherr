<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Model\Event;
use App\Repository\EventRepository;
use Illuminate\Http\Request;

class EventController extends Controller
{

    /**
     * @var EventRepository
     */
    private $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->middleware('auth');
        $this->eventRepository=$eventRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $events=$this->eventRepository->getIndexdata();
        return view('event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreEventRequest $request)
    {
        $this->eventRepository->handleCreate($request);
       return redirect()->route('events.index')->with('message','Event Created Sucessfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  Event  $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Event $event)
    {
        return view('event.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Event  $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $event=$this->eventRepository->getEditdata($id);
        return view('event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Event  $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreEventRequest $request,$id)
    {
        $this->eventRepository->handleEdit($request,$id);
        return redirect()->route('events.show',$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
       $this->eventRepository->handleDelete($id);
        return redirect()->route('events.index');
    }
}
