@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session('message'))
                    {{session('message')}}
                @endif
                <div class="card">
                    <div class="card-header">Your Contact List
                        <a id="createcontactbtn" class="btn btn-primary offset-md-7" href="{{route('contacts.create')}}">Create Contact</a>
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Contact Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('contacts.show',$contact->id)}}">Show</a>
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
