@extends('admin._layouts.admin')

@section('content')

    <h1>Create Image</h1>
    {{ Form::open(array('route' => 'admin.images.store', 'files'=>true)) }}
    @include('admin.images._partials.form')
    {{ Form::close() }}

@stop