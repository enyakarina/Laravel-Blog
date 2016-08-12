@extends('layouts.master')

@section('title')
Personal
@stop

@section('content')
<div class="container-fluid personal-container">
    <div class="page-header personal-header col-lg-12">
    <div class="col-lg-3 col-xs-12 personal-image-div">
        <img src="/images/smile.svg" alt="smile" class="personal-image">
    </div>
    <div class="col-lg-8 col-xs-12">
    <h1 id="personal-h1">Hobbies and Interests!</h1>
    </div>
    </div>

    <!--BOX 1-->
    <div class="personal-box col-lg-3 col-md-3 col-xs-12 personal-coding">
    <h3 class="personal-h3">Coding</h3>
    <img src="/images/coding.svg" alt="code" class="personal-icons">
    <p>With programming, I am most passionate about problem-solving and seeing the end product come together.</p>
    <p>Whether it's a new language or framework, I enjoy learning. I am a patient, creative, easy-going person, and I want to contribute to a team's mission and create amazing things.
    </div>
    <!--BOX 2-->
    <div class="personal-box col-lg-3 col-md-3 col-xs-12 personal-gaming">
    <h3 class="personal-h3">Gaming</h3>
    <img src="/images/nintendo.svg" alt="gaming" class="personal-icons">
    <p>Who doesn't like playing games every once in a while?!</p>
    <p>Overwatch, CS:GO, Pokemon are a few of my favorite!</p>
    </div>
    <!--BOX 3-->
    <div class="personal-box col-lg-3 col-md-3 col-xs-12 personal-fitness">
    <h3 class="personal-h3">Fitness</h3>
    <img src="/images/fitness.svg" alt="fitness" class="personal-icons">
    <p>You can never say no to a good workout and healthy meal. I have a degree in nutrition, and although it is not what I am pursuing as a career, it is still something I enjoy!</p>
    </div>
    <!--BOX 4-->
    <div class="personal-box col-lg-3 col-md-3 col-xs-12 personal-music">
    <h3 class="personal-h3">Music</h3>
    <img src="/images/ukulele.svg" alt="ukulele" class="personal-icons">
    <p>I enjoy singing and playing ukulele. It is a hobby I picked up about a year ago.</p>
    </div>
@stop