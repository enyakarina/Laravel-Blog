@extends('layouts.master')

@section('title')
    All Posts
@stop

@section('content')
    <div class="container postIndex col-lg-12 col-md-12 col-xs-12">
    @foreach($posts as $post)
    <div class="blogPost">
        <h1 class="postTitle"><a href="{{{action('PostsController@show', $post->id) }}}" class="postTitleLinks">{{{ $post->title }}}</a></h1>
        <p class="postContent">{{{ Str::limit($post->content, 450) }}} <a class="postLink" href="{{{ action('PostsController@show', $post->id) }}}">Read more</a></p>
        <p class="datePosted"><small>Posted on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</small></p>
    </div>
    @endforeach
        {{ $posts->links() }}
    </div>
@stop