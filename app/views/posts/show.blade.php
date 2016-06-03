@extends('layouts.master')

@section('title')
    All posts
@stop

@section('content')
    <div class="container">
        <h1>Check out the blog post</h1>
        <p>{{{ $post->title }}}</p>
        <p>{{{ $post->content }}}</p>
    </div>
@stop