@extends('layouts.master')

@section('title')
    All Posts
@stop

@section('content')
    <h1>Browse through all the posts here</h1>
    @foreach($posts as $post)
        <div class="container">
            <h3><a href="{{{action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
            <p>{{{ $post->content }}}</p>
            <p>Posted on: {{{ $post->created_at }}}</p>
        </div>
    @endforeach
@stop