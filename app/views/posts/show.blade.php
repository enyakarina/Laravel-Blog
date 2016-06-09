@extends('layouts.master')

@section('title')
    All posts
@stop

@section('content')
    <div class="container col-lg-12 col-md-12 col-xs-12" id="showSinglePost">
        <h1>{{{ $post->title }}}</h1>
        <p>{{{ $post->content }}}</p>
        <p><strong><small>Written by: {{{ $post->user->username }}}</small></strong></p>
        @if(Auth::user()->id == $post->user->id)
        <p><a href="{{{ action('PostsController@edit', $post->id) }}}">Edit Your Post</a></p>

        {{-- This creates an empty form that points to the destroy method on the PostsController --}}
        {{-- There is nothing visible to the user here, but we can target this form with Javascript --}}
        {{ Form::open([
            'action' => ['PostsController@destroy', $post->id],
            'id'     => 'delete-post-form',
            'method' => 'DELETE',
        ]) }}
        <button id="delete-post-btn submit-button" class="btn btn-danger">Delete this post!</button>
        {{ Form::close() }}
        @endif
    </div>
@stop

@section('bottom-script')
{{-- make sure we link up our javascript --}}
<script src="/js/delete-post.js"></script>
@stop

