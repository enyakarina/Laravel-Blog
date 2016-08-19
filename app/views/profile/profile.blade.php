@extends('layouts.master')

@section('title')
My Profile
@stop

@section('content')
<div class="container-fluid" id="profileContainer col-lg-12">
    <div class="page-header">
        <h1 id="user-header">This is <span class="username">{{{ $user->username }}} </span>
        <br><small>Location: {{{ $user->profile->location }}}</small></h1>
    </div>

    <div class="col-lg-6">
        <h2>Bio: </h2>
        <p class="profile-description">{{{ $user->profile->bio }}}</p>
    </div>

    <div class="col-lg-6">
        <h2>My posts:</h2>
            @foreach($user->posts as $post)
            <p class="profile-description"><a href="{{{action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></p>
            @endforeach
    </div>
    <div class="col-lg-12">
    @if(Auth::user())
        @if(Auth::user()->id == $user->id)
            <a href="{{{action('ProfilesController@edit', $user->profile->id) }}}">Edit your profile</a>
        @endif
    @endif
    </div>
</div>
@stop