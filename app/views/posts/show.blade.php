@extends('layouts.master')

@section('title')
    All posts
@stop

@section('content')
    <div class="container" id="showSinglePost">
        <h1></h1>
        <h2>{{{ $post->title }}}</h2>
        <p>{{{ $post->content }}}</p>
        <p><strong><small>Written by: {{{ $post->user->username }}}</small></strong></p>
        <p><a href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post </a></p>
    </div>
@stop
