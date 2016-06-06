@extends('layouts.master')

@section('title')
    All Posts
@stop

@section('content')
    <div class="container postIndex">
    <h1>Post Archives</h1>
    @foreach($posts as $post)
        <h3><a href="{{{action('PostsController@show', $post->id) }}}" class="postLinks">{{{ $post->title }}}</a></h3>
        <p>{{{ $post->content }}}</p>
        <p class="datePosted"><small>Posted on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</small></p>
    @endforeach
        {{ $posts->links() }}
    </div>
@stop