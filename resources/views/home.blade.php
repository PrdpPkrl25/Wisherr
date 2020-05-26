@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome to Wisherr</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-deck">
                            <div class="card" style="margin-top: 10px" >
                                <div class="card-header">Upcoming Events:</div>

                                <div class="card-body">
                                    <div class="row">
                                        @widget('UpcomingEvents')
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="margin-top: 10px" >
                                <div class="card-header"> Events Calander:</div>

                                <div class="card-body">

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
