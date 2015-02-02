@extends('admin._layouts.admin')

@section('content')

    <h1>Edit Image</h1>
    {{ Form::model($image, array('route' => array('admin.images.update', $image->id), 'method' => 'put', 'files'=>true)) }}
    @include('admin.images._partials.form')
    {{ Form::close() }}

@stop
