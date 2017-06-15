@extends('layouts.master')

@section('title')
    All Posts
@stop

@section('content')
<div class="container post-index">
    <h1 class="teal-text">&lt;all posts&gt;</h1>
    <div class="row blog-row">
        @foreach($posts as $post)
        <div class="blog-post col-xs-12 col-md-12 col-lg-12">
            <h2 class="salmon-text"><a href="{{{action('PostsController@show', $post->id) }}}" class="post-title">{{{ $post->title }}}</a></h2>
            <p class="post-content">{{ Str::limit($post->content, 450) }} <a class="post-link" href="{{{ action('PostsController@show', $post->id) }}}"> <br>Read more</a></p>
            <p class="date-posted"><small>Posted on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</small></p>
        </div>
        @endforeach
        {{ $posting->links() }}
    </div>
</div>
@stop