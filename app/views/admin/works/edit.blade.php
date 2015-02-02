@extends('admin._layouts.admin')

@section('content')

    <h1>Edit Work</h1>
    {{ Form::model($work, array('route' => array('admin.works.update', $work->id), 'files'=>true, 'method' => 'put' )) }}
    @include('admin.works._partials.form')
    {{ Form::close() }}

@stop