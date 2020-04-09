@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$event->event_name}} Event Message: <a class="btn btn-primary offset-md-6" href="{{route('messages.create',$event->id)}}">Set New Message</a></div>

                    <div class="card-body">
                        <h2>Receiver Name: {{$receiver->name}}</h2>
                        <h2>Message: {{$message->message_content}}</h2>
                        <h3>Message Date&Time: {{$message->message_time}}</h3>
                         @php
                             $days = now()->diffInDays(\Carbon\Carbon::parse($message->message_time));
                             $hours = now()->copy()->addDays($days)->diffInHours(\Carbon\Carbon::parse($message->message_time));
                             $minutes = now()->copy()->addDays($days)->addHours($hours)->diffInMinutes(\Carbon\Carbon::parse($message->message_time));
                        @endphp
                        <h3>Time Remaining to Message: {{$days}}days {{$hours}}hours {{$minutes}}minutes.</h3>

                        <form action="{{route('messages.destroy',$message->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <a class="btn btn-primary" href="{{route('messages.edit',$message->id)}}">Edit Message</a>
                            <button class="btn btn-danger">Delete Message</button>
                            <a class="btn btn-dark" href="{{route('events.show',$event->id)}}">See All Message</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

