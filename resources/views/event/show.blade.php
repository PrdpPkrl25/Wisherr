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
                           <a class="btn btn-dark" href="{{route('messages.create',$event->id)}}">Set Message</a>
                        </form>

{{--                        <div class="card">--}}
{{--                            <div class="card-header">Your Event Message List</div>--}}

{{--                            <div class="card-body">--}}

{{--                                <table class="table table-bordered">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>S.N</th>--}}
{{--                                        <th>Message Content</th>--}}
{{--                                        <th>Receiver</th>--}}
{{--                                        <th>Action</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach($messages as $message)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$loop->iteration}}</td>--}}
{{--                                            <td>{{$message->message_content}}</td>--}}
{{--                                            <td></td>--}}
{{--                                            <td>--}}
{{--                                                <a class="btn btn-info" href="{{route('message.show',$message->id)}}">Show</a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </div>--}}
{{--                        </div>--}}

                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection

