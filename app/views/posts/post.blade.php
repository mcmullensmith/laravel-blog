@extends('_layouts.default')

@section('content')


    <div class="blog-post">
        <h2 class="blog-post-title">{{{ $post->title }}}</h2>
        <p class="created_at">Created on {{{ date('Y-m-d', strtotime($post->created_at))}}} </p>
        <?php $paragraphs = explode(PHP_EOL, $post->body); ?>

        @foreach($paragraphs as $paragraph)
            <p>{{html_entity_decode($paragraph)     }}</p>
        @endforeach
        {{--<p>{{{ $post->body }}}</p>--}}
        <p>{{ link_to_route('home', '&lsaquo; Back') }}</p>

     </div>


@stop
