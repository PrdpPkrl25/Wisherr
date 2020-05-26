@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{$contact->name}} Contact Detail:</div>

                    <div class="card-body">
                        <h2>Contact Name: {{$contact->name}}</h2>
                        <h2>Email Address: {{$contact->email}}</h2>
                        <h2>Phone Number: {{$contact->phone}} </h2>
                        <form action="{{route('contacts.destroy',$contact->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <a class="btn btn-primary" href="{{route('contacts.edit',$contact->id)}}">Edit Contact</a>
                            <button class="btn btn-danger">Delete Contact</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

