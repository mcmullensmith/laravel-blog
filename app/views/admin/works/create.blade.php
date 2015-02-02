@extends('admin._layouts.admin')

@section('content')

    <h1>Create Work</h1>
    {{ Form::open(array('route' => 'admin.works.store', 'files'=>true)) }}
    @include('admin.works._partials.form')
    {{ Form::close() }}

@stop