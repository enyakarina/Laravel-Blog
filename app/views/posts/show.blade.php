@extends('layouts.master')

@section('title')
    All posts
@stop

@section('content')
<div class="container">
    <div class="row single-post">
        <div class="col-lg-12 col-md-12 col-xs-12" id="single-post">
            <h1 class="red-text">&lt; {{{ $post->title }}}&gt;</h1>
            
            <p class="single-post-content">{{ $post->content }}</p>
            <h4 class="teal-text">{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</h4>
            <p class="red-text">Written by: {{{ $post->user->username }}}</p>
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
</div>
@stop

@section('bottom-script')
{{-- make sure we link up our javascript --}}
<script src="/js/delete-post.js"></script>
@stop

