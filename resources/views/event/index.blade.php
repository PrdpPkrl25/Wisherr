@extends('layouts.app')

@section('content')
    <div class="table-wrapper">
    {!! $dataTable->table(['class' => 'table table-bordered table-hover mb-0 dt-responsive no-footer dtr-inline
        collapsed'], true) !!}
    </div>
@endsection
@section('script')
    {!! $dataTable->scripts() !!}
@endsection
