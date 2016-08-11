@extends('layouts.master')

@section('title')
    Homepage
@stop

@section('content')

<div class="container-fluid homepage-container">
    <div class="page-header">
        <h1 id="home-header">Hello, I'm Kari Palomino.</h1>
        <h3 id="home-sub">Welcome to my page!</h3>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6" id="contentOne">
        <div class="thumbnail homepage-content">
            <div class="caption">
            <h2 class="home-h2">About Me</h2>
            <p>I am a 22 year old person living in Texas who is  looking to transition into the world of web development. I started my coding journey fairly recently, in March 2016. Prior to this I had been attending community college while working part time in food service.</p> 

            <p>
            I learned to code by attending an intense 16-week program where I learned to build websites and web applications at a rapid pace. It has been one of the most rewarding things I have done for myself. I love to code, and I will continue learning and growing.</p>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6" id="contentTwo">
        <div class="thumbnail homepage-content">
            <div class="caption">
            <h2 class="home-h2">Check me out</h2>
                <p>Text text text</p>
            </div>
        </div>
    </div>
</div>
@stop