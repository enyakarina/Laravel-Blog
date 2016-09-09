@extends('layouts.master')

@section('title')
    Homepage
@stop

@section('content')

<div class="container-fluid homepage-container">
    <div class="page-header col-lg-12">
        <h1 id="home-header col-lg-12">Hello, I'm <span id="enya">Enya</span> Palomino.</h1>
        <h3 id="home-sub">Welcome to my page!</h3>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6" id="contentOne">
        <div class="homepage-content">
            <div class="home-boxes">
            <h2 class="home-h2">About Me</h2>
            <p>I am a 22 year old living in Texas who is  looking to transition into the world of web development. I started my coding journey fairly recently, in March 2016. Prior to this I had been attending college while working part time in food service.
            <br>
            <br>
            I learned to code by attending an intense program where I learned to build websites and web applications at a rapid pace. It has been one of the most rewarding things I have done for myself. I love to code, and I will continue learning and growing.</p>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6" id="contentTwo">
        <div class="homepage-content">
            <div class="home-boxes">
            <h2 class="home-h2">Contact</h2>
            <ul class="contact-list">
            <li><i class="fa fa-star" aria-hidden="true"></i> Feel free to {{ HTML::mailto('enyakpalomino@gmai.com', 'send me an email') }}
            </li>
            <li>
                <i class="fa fa-star" aria-hidden="true"></i> Check out my <a href="http://github.com/enyakarina">github</a>
            </li>
            <li>
                <i class="fa fa-star" aria-hidden="true"></i> Send me a text @ <span class="popup-text">(210) 412-0292</span>
            </li>
            </div>
        </div>
    </div>
</div>
@stop
