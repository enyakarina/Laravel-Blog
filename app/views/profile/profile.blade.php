@extends('layouts.master')

@section('title')
My Profile
@stop

@section('content')
<div class="container" id="profileContainer">
    <div class="page-header">
        <h1><span class="username">{{{ $user->username }}} </span><small>Location: {{{ $user->profile->location }}}</small></h1>
    </div>

    <h2>Bio: </h2><p class="profile-description">{{{ $user->profile->bio }}}</p>
    <h2>My posts:</h2>
        @foreach($user->posts as $post)
        <p class="profile-description"><a href="{{{action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></p>
        @endforeach
    @if(Auth::user())
        @if(Auth::user()->id == $user->id)
            <a href="{{{action('ProfilesController@edit', $user->profile->id) }}}">Edit your profile</a>
        @endif
    @endif
</div>
@stop