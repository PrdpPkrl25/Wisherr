@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session('message'))
                    {{session('message')}}
                @endif
                <div class="card">
                    <div class="card-header ">Your Event List
                            <a id="createeventbtn" class="btn btn-primary offset-md-8" href="{{route('events.create')}}">Create Event</a>
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Event Name</th>
                                <th>Event Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$event->event_name}}</td>
                                <td>{{$event->event_date}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('events.show',$event->id)}}">Show</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
