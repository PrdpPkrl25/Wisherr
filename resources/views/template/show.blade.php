@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$template->template_name}} Greetings Detail:</div>

                    <div class="card-body">
                        <h2>Dear Receiver,</h2>
                        <h3>{{$template->content}}</h3>
                        <form action="{{route('templates.destroy',$template->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <a class="btn btn-primary" href="{{route('templates.edit',$template->id)}}">Edit Template</a>
                            <button class="btn btn-danger">Delete Template</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

