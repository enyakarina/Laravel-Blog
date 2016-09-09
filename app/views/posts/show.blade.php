@extends('layouts.master')

@section('title')
    All posts
@stop

@section('content')
<div class="container-fluid">
    <div class="container col-lg-12 col-md-12 col-xs-12" id="showSinglePost">
        <h1 class="singlepost-h1">{{{ $post->title }}}</h1>
        <h4 class="italic">Written on {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</h4>
        <p class="post-content">{{ $post->content }}</p>
        <p id="writtenby"><strong><small>Written by: {{{ $post->user->username }}}</small></strong></p>
        @if(Auth::user())
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
        @endif
    </div>
</div>
@stop

@section('bottom-script')
{{-- make sure we link up our javascript --}}
<script src="/js/delete-post.js"></script>
@stop

