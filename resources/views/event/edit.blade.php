@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit {{$event->event_name}} Event</div>

                    <div class="card-body">
                        <form method="post" action="{{route('events.update',$event->id)}}">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="event_name" class="col-md-4 col-form-label text-md-right">{{__('Event Name')}}</label>

                                <div class="col-md-6">
                                    <input type="text" id="event_name" class="form-group form-control" name="event_name" value="{{$event->event_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="event_date" class="col-md-4 col-form-label text-md-right">{{__('Event Date')}}</label>

                                <div class="col-md-6">
                                    <input type="date" id="event_date" class="form-group form-control" name="event_date" value="{{$event->event_date}}">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
