@extends('layouts.app')
@section('content')
    {!! $dataTable->table() !!}

@endsection
@section('script')
    {!! $dataTable->scripts() !!}
@endsection
