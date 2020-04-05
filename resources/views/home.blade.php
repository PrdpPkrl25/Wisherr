@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <h2 class="text-center">Welcome to Event Wishes</h2>
                    <p class="row-cols-1">Click on the button below to create your event or view your event:</p>
                        <div class="col-md-6 offset-md-4">
                           <a id="eventform" class="btn btn-primary" href="{{route('events.create')}}">Create Event</a>
                            <a id="eventform" class="btn btn-primary" href="{{route('events.index')}}">View Events</a>
                        </div>
                        <br>
                        <p class="row-cols-1">Click on the button below to create a template or view created template:</p>
                        <div class="col-md-6 offset-md-4">
                           <a id="templateform" class="btn btn-primary" href="{{route('templates.create')}}">Create Template</a>
                            <a id="templateform" class="btn btn-primary" href="{{route('templates.index')}}">View Templates</a>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
