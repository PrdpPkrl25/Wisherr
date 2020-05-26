@extends('layouts.app')

@section('content')
        <div class="container">
            <a id="createeventbtn" class="btn btn-primary offset-md-6" href="{{route('events.create')}}">Create New</a>
            <div class="table-wrapper">
            {!! $dataTable->table(['class' => 'table table-bordered table-hover mb-0 dt-responsive no-footer dtr-inline
                collapsed'], true) !!}
            </div>
        <div class="container">
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection
