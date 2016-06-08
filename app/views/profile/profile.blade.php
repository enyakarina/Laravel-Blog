@extends('layouts.master')

@section('title')
My Profile
@stop

@section('content')
<div id ="container">
    <h1>Profile</h1>
    <h2>{{{ $user->username }}} <small>{{{ $user->profile->location }}}</h2>
    <p><strong>Bio:</strong> {{{ $user->profile->bio }}}</p>
    <h3>My posts:</h2>
        @foreach($user->posts as $post)
        <p><a href="{{{action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></p>
        @endforeach
    @if(Auth::user()->id == $user->id)
        <h3><a href="{{{action('ProfilesController@edit', Auth::user()->username) }}}">Edit your profile</a></h3>
    @endif
</div>
@stop