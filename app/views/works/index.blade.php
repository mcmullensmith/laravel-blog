@extends('_layouts.default')

@section('content')
    <div class="blog-header">
        <h1 class="blog-title">Work</h1>
    </div>
    @foreach($works as $work)
        <article>
            <h2 class="blog-post-title">{{ link_to_route('work', $work->title, array($work->slug)) }}</h2>

            <p>{{{ str_limit($work->body, 255, '...') }}}</p>
            <p>{{ link_to_route('work', 'Read More &rsaquo;', array($work->slug)) }}</p>
        </article>
    @endforeach

@stop
