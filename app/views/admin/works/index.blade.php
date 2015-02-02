@extends('admin._layouts.admin')

@section('content')
    <h1>Users</h1>
    {{ link_to_route('admin.works.create', 'Create new Work') }}

    @if(count($works))
        <ul>
            @foreach($works as $work)
                <li>
                    <img src="{{ '/images/thumbs/' . $work->thumbnail }}">
                    {{ link_to_route('admin.works.edit', $work->title, array($work->id)) }}
                    {{ Form::open(array('route' => array('admin.works.destroy', $work->id), 'method' => 'delete', 'class' => 'destroy')) }}
                    {{ Form::submit('Delete') }}
                    {{ Form::close() }}
                </li>
            @endforeach
        </ul>
    @endif

@stop