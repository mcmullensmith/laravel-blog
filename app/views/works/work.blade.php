@extends('_layouts.default')

@section('content')
    <h1>{{{ $work->title }}}</h1>
    <p>{{{ $work->body }}}</p>
    @foreach ($work->image as $image)
        <img src="{{ '/images/' . $image->image }}" >
    @endforeach
    <p>{{ link_to_route('work', '&lsaquo; Back') }}</p>
@stop

