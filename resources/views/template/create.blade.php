@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Template For Your Event:</div>

                    <div class="card-body">
                        <form method="post" action="{{route('templates.store')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="template_name" class="col-md-4 col-form-label text-md-right">{{__('Template Name')}}</label>

                                <div class="col-md-6">
                                    <input type="text" id="template_name" class="form-group form-control" name="template_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">{{__('Template Content')}}</label>

                                <div class="col-md-6">
                                    <input type="text" id="content" class="form-group form-control" name="content">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
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
