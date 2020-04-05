@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$event->event_name}} Event Detail:</div>

                    <div class="card-body">
                    <h2>Receiver Name:</h2>
                    <h2>Event Name: {{$event->event_name}}</h2>
                    <h2>Event Date: {{$event->event_date}}</h2>
                    <h2>Day Remaining to Event: {{now()->diffInDays(\Carbon\Carbon::parse($event->event_date))}} days.</h2>
                        <form action="{{route('events.destroy',$event->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <a class="btn btn-primary" href="{{route('events.edit',$event->id)}}">Edit Event</a>
                        <button class="btn btn-danger">Delete Event</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

