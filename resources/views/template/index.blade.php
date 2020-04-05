@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session('message'))
                    {{session('message')}}
                @endif
                <div class="card">
                    <div class="card-header">Greeting Template List</div>

                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Template Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($templates as $template)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$template->template_name}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('templates.show',$template->id)}}">Show</a>
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
