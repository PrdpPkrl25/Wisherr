@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit {{$contact->name}} Contact</div>

                    <div class="card-body">
                        <form method="post" action="{{route('contacts.update',$contact->id)}}">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="contact_name" class="col-md-4 col-form-label text-md-right">{{__('Contact Name')}}</label>

                                <div class="col-md-6">
                                    <input type="text" id="contact_name" class="form-group form-control" name="name" value="{{$contact->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact_email" class="col-md-4 col-form-label text-md-right">{{__(' Email Address')}}</label>

                                <div class="col-md-6">
                                    <input type="email" id="contact_email" class="form-group form-control" name="email" value="{{$contact->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact_phone" class="col-md-4 col-form-label text-md-right">{{__('Phone Number')}}</label>

                                <div class="col-md-6">
                                    <input type="text" id="contact_phone" class="form-group form-control" name="phone" value="{{$contact->phone}}">
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
