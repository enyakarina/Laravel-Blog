@extends('layouts.master')

@section('title')
    Kari's Resume
@stop

@section('content')
<div class="container">
    <div class="page-header">
      <h1>Welcome to my resume page</h1>
      <small>Thank you for stopping by!</small>
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12 page-header">
        <h2>Skills</h2>
        <h4>Languages</h4>
            HTML5, CSS3, JavaScript, PHP5+, MySQL
        <h4>Technologies</h4>
            Sublime Text, Sequel Pro, GitHub, JQuery, Laravel, Bootstrap, Google Maps API, JSON.
    </div>
    <hr>
    <div class="col-lg-12 col-md-12 col-xs-12 page-header">
        <h2>Education</h2>
        <h4>Codeup (March 7, 2016 - June 30, 2016)</h4>
            <p>Completed a 16-week intensive Full Stack web development bootcamp. 600hr+ of coding.</p>
        <h4>San Antonio College</h4>
            <p>Associate's Degree in Applied Science</p>
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12 page-header">
        <h2>Work Experience</h2>
            <h4>The Egg and I (2015-Present)</h4>
                <p>Position: Server</p>
            <h4>Cracker Barrel(2013-2014)</h4>
                <p>Position: Server</p>
            <h4>Albustan (2012-2013)</h4>
                <p>Position: Server</p>
    </div>
</div>
@stop