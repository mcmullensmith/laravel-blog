@extends('admin._layouts.admin')

@section('content')
    <h1>Images</h1>
    {{ link_to_route('admin.images.create', 'Create new Image') }}

    @if(count($images))
        <ul>
            @foreach($images as $image)
                <li>
                    <img src="{{ '/images/thumbs/' . $image->thumbnail }}">
                    {{ $image->title }}
                    {{ Form::open(array('route' => array('admin.images.destroy', $image->id), 'method' => 'delete', 'class' => 'destroy')) }}
                    {{ Form::submit('Delete') }}
                    {{ Form::close() }}
                </li>
            @endforeach
        </ul>
    @endif

@stop
