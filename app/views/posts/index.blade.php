@extends('_layouts.default')

@section('content')
    <div class="blog-header">
        <h1 class="blog-title">Blog</h1>
    </div>
    @foreach($posts as $post)


        <div class="blog-post">
            <h2 class="blog-post-title">{{ link_to_route('post', $post->title, array($post->slug)) }}</h2>
            <p class="created_at">Created on {{{ date('Y-m-d', strtotime($post->created_at))}}}</p>
            <p>{{ str_limit(html_entity_decode($post->body), 512, '...') }}</p>
            <p>{{ link_to_route('post', 'Read More &rsaquo;', array($post->slug)) }}</p>
        </div>


    @endforeach
    <nav>
        {{ $posts->links() }}
    </nav>

@stop
