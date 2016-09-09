@extends('layouts.master')

@section('title')
Personal
@stop

@section('content')
<div class="container-fluid personal-container">
    <div class="page-header personal-header col-lg-12">
    <div class="col-lg-12 col-xs-12">
    <h1 id="personal-h1">Hobbies and Interests</h1>
    </div>
    </div>

    <!--BOX 1-->
    <div class="personal-box col-lg-4 col-md-4 col-xs-12 personal-coding">
    <h3 class="personal-h3">Coding</h3>
    <img src="/images/coding.svg" alt="code" class="personal-icons">
    <p>With programming, I am most passionate about problem-solving and seeing the end product come together.</p>
    <p>Whether it's a new language or framework, I enjoy learning. I am a patient, creative, easy-going person, and I want to contribute to a team's mission and create amazing things.
    </div>
    <!--BOX 2-->
    <div class="personal-box col-lg-4 col-md-4 col-xs-12 personal-meetup">
    <h3 class="personal-h3">Meetups</h3>
    <img src="/images/meetup.svg" alt="meetup" class="personal-icons">
    <p>Not long ago, I started attending different meetups!</p>
    <p>SA Web Dev meetup is one of my favorites, it consists of awesome speakers as well as complimentary refreshments. It's an awesome way to connect and network with the tech community in San Antonio.</p>
    </div>
    <!--BOX 3-->
    <div class="personal-box col-lg-4 col-md-4 col-xs-12 personal-self">
    <h3 class="personal-h3">Self-Improvement</h3>
    <img src="/images/self.svg" alt="self" class="personal-icons">
    <p>Lately I have been searching ways to improve myself since there really are no limits. I set goals, I meet them, and then I go a step further.</p>
    <p>I have improved immensely by taking care of myself, emotionally and physically, and mentally.</p>
    <p>I've also added more and more skills to my toolkit!</p>
    </div>
@stop